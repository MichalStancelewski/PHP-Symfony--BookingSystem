<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220806165520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE settings_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE settings (id INT NOT NULL, is_indexable_all BOOLEAN NOT NULL, is_indexable_homepage BOOLEAN NOT NULL, is_indexable_contact BOOLEAN NOT NULL, meta_title_homepage TEXT DEFAULT NULL, meta_title_contact TEXT DEFAULT NULL, meta_description_homepage TEXT DEFAULT NULL, meta_description_contact TEXT DEFAULT NULL, contact_email VARCHAR(255) DEFAULT NULL, contact_phone VARCHAR(255) DEFAULT NULL, image_logo VARCHAR(255) DEFAULT NULL, image_icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE settings_id_seq CASCADE');
        $this->addSql('DROP TABLE settings');
    }
}
