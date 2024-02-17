<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231110113001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario ADD doc_identidad VARCHAR(255) NOT NULL, ADD username VARCHAR(255) NOT NULL, ADD nombre VARCHAR(255) NOT NULL, ADD apellidos VARCHAR(255) NOT NULL, ADD dinero INT NOT NULL, ADD dinero_retenido INT NOT NULL, ADD fecha_nacimiento DATE NOT NULL, ADD last_login DATE DEFAULT NULL, ADD esta_baneado INT NOT NULL, ADD ip_last_login VARCHAR(255) DEFAULT NULL, ADD esta_verificado INT NOT NULL, ADD denied_verify VARCHAR(255) DEFAULT NULL, ADD razon_baneo VARCHAR(255) DEFAULT NULL, ADD docimg1 VARCHAR(255) DEFAULT NULL, ADD docimg2 VARCHAR(255) DEFAULT NULL, ADD docselfie VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario DROP doc_identidad, DROP username, DROP nombre, DROP apellidos, DROP dinero, DROP dinero_retenido, DROP fecha_nacimiento, DROP last_login, DROP esta_baneado, DROP ip_last_login, DROP esta_verificado, DROP denied_verify, DROP razon_baneo, DROP docimg1, DROP docimg2, DROP docselfie');
    }
}
