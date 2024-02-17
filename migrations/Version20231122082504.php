<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122082504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE transacciones (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, tipo INT NOT NULL, cantidad_eur DOUBLE PRECISION NOT NULL, autorizacion TINYINT(1) NOT NULL, fecha_inicio DATE NOT NULL, completada TINYINT(1) NOT NULL, INDEX IDX_66C5ED5E58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transacciones ADD CONSTRAINT FK_66C5ED5E58E0A285 FOREIGN KEY (userid_id) REFERENCES usuario (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transacciones DROP FOREIGN KEY FK_66C5ED5E58E0A285');
        $this->addSql('DROP TABLE transacciones');
    }
}
