<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180307083855 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE main_planification (id INT AUTO_INCREMENT NOT NULL, date_planif DATETIME NOT NULL, competences VARCHAR(50) NOT NULL, time_planif TIME NOT NULL, starting_date DATETIME NOT NULL, end_date VARCHAR(255) NOT NULL, comment VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(255) NOT NULL, CHANGE numberPrefix numberPrefix VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE main_planification');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(50) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE numberPrefix numberPrefix VARCHAR(20) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
