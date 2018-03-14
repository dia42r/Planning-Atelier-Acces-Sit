<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180306104539 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE competence DROP title');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(255) NOT NULL, CHANGE numberPrefix numberPrefix VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE competence ADD title VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(50) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE numberPrefix numberPrefix VARCHAR(20) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
