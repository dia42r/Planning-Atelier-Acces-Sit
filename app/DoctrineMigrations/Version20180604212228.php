<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180604212228 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE main_sous_planification CHANGE time_previs time_previs TIME NOT NULL');
        $this->addSql('ALTER TABLE sale_document_line ADD total_time TIME NOT NULL');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
        $this->addSql('ALTER TABLE sale_document CHANGE total_time total_time TIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE main_sous_planification CHANGE time_previs time_previs TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE sale_document CHANGE total_time total_time TIME DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
        $this->addSql('ALTER TABLE sale_document_line DROP total_time');
    }
}
