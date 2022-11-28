<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128220858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment ADD employee_id INT DEFAULT NULL, ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C8C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9474526C8C03F15C ON comment (employee_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9474526CED5CA9E6 ON comment (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C8C03F15C');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CED5CA9E6');
        $this->addSql('DROP INDEX UNIQ_9474526C8C03F15C ON comment');
        $this->addSql('DROP INDEX UNIQ_9474526CED5CA9E6 ON comment');
        $this->addSql('ALTER TABLE comment DROP employee_id, DROP service_id');
    }
}
