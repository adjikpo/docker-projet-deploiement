<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200806081803 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $myTable = $schema->createTable("todo");
        $myTable->addColumn("id", "integer",[
            "unsigned" => true,
            'autoincrement' => true,
        ]);
        $myTable->addColumn("title", "string", array("length" => 32));
        $myTable->addColumn("completed", "boolean");
        $myTable->setPrimaryKey(array("id"));
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
