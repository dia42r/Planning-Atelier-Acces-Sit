<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180626075458 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE competence_actor DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE competence_actor ADD PRIMARY KEY (actor_id, competence_id)');
        $this->addSql('DROP INDEX competence_position_uindex ON competence');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_94D4687F462CE4F5 ON competence (position)');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX uniq_94d4687f462ce4f5 ON competence');
        $this->addSql('CREATE UNIQUE INDEX competence_position_uindex ON competence (position)');
        $this->addSql('ALTER TABLE competence_actor DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE competence_actor ADD PRIMARY KEY (competence_id, actor_id)');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}