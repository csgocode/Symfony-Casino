<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215223804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE afiliados (id INT AUTO_INCREMENT NOT NULL, invitado_user_id INT NOT NULL, afiliado_user_id INT NOT NULL, fecha_registro DATETIME NOT NULL, level INT NOT NULL, INDEX IDX_A9825F2A67C34952 (invitado_user_id), INDEX IDX_A9825F2A64E7CD01 (afiliado_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE afiliados ADD CONSTRAINT FK_A9825F2A67C34952 FOREIGN KEY (invitado_user_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE afiliados ADD CONSTRAINT FK_A9825F2A64E7CD01 FOREIGN KEY (afiliado_user_id) REFERENCES usuario (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE afiliados DROP FOREIGN KEY FK_A9825F2A67C34952');
        $this->addSql('ALTER TABLE afiliados DROP FOREIGN KEY FK_A9825F2A64E7CD01');
        $this->addSql('DROP TABLE afiliados');
    }
}
