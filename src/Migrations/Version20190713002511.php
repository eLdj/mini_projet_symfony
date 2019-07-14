<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190713002511 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY employe_ibfk_1');
        $this->addSql('DROP INDEX id_service ON employe');
        $this->addSql('ALTER TABLE employe DROP id_service');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE employe ADD id_service INT NOT NULL');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT employe_ibfk_1 FOREIGN KEY (id_service) REFERENCES service (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX id_service ON employe (id_service)');
    }
}
