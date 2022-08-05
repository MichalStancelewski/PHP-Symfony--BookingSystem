<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220805205914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE service_categories_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE service_categories (id INT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, is_indexable BOOLEAN NOT NULL, short_description TEXT DEFAULT NULL, long_description TEXT DEFAULT NULL, meta_title VARCHAR(255) DEFAULT NULL, meta_description TEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE service ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD many_to_one VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD212469DE2 FOREIGN KEY (category_id) REFERENCES service_categories (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_E19D9AD212469DE2 ON service (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE service DROP CONSTRAINT FK_E19D9AD212469DE2');
        $this->addSql('DROP SEQUENCE service_categories_id_seq CASCADE');
        $this->addSql('DROP TABLE service_categories');
        $this->addSql('DROP INDEX IDX_E19D9AD212469DE2');
        $this->addSql('ALTER TABLE service DROP category_id');
        $this->addSql('ALTER TABLE service DROP many_to_one');
    }
}
