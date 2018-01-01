<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171228135410 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sale_document DROP FOREIGN KEY FK_C61D66DC9395C3F3');
        $this->addSql('DROP TABLE customer');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, customerId INT NOT NULL, civility VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, siren VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddress1 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddress2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddressCity VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddressZipCode VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddressState VARCHAR(60) NOT NULL COLLATE utf8_unicode_ci, mainDeliveryAddressCountry VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddress1 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddress2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddressCity VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddressZipCode VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddressState VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, mainInvoicingAddressCountry VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, UNIQUE INDEX UNIQ_81398E09DB8BBA08 (siren), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sale_document ADD CONSTRAINT FK_C61D66DC9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
    }
}
