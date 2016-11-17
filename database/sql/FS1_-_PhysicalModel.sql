CREATE TABLE "people" (
"id" serial4 NOT NULL,
"customers_id" serial4,
"first_name" varchar(20) COLLATE "default" NOT NULL,
"last_name" varchar(20) COLLATE "default" NOT NULL,
"cpf" char(11) COLLATE "default" NOT NULL,
"rg" varchar(20) COLLATE "default",
"sex" char(1) COLLATE "default" NOT NULL,
PRIMARY KEY ("id") ,
CONSTRAINT "CPF" UNIQUE ("cpf"),
CONSTRAINT "RG" UNIQUE ("rg")
)
WITHOUT OIDS;

COMMENT ON COLUMN "people"."sex" IS 'M ou F';
ALTER TABLE "people" OWNER TO "fs1";

CREATE TABLE "contact_persons" (
"id" serial4 NOT NULL,
"persons_id" serial4 NOT NULL,
"contact_type" varchar(10) COLLATE "default" NOT NULL,
"contact" varchar(50) COLLATE "default" NOT NULL,
PRIMARY KEY ("id") 
)
WITHOUT OIDS;

COMMENT ON COLUMN "contact_persons"."contact_type" IS 'Ex.: Email, TIM, Oi, Fixo';

CREATE TABLE "complement_persons" (
"id" serial4 NOT NULL,
"persons_id" serial4 NOT NULL,
"complement_name" varchar(30) COLLATE "default" NOT NULL,
"complement" varchar(100) COLLATE "default" NOT NULL,
PRIMARY KEY ("id") 
)
WITHOUT OIDS;

COMMENT ON COLUMN "complement_persons"."complement_name" IS 'Ex.: Nascimento, Nome Completo.';

CREATE TABLE "address_persons" (
"id" serial4 NOT NULL,
"persons_id" serial4 NOT NULL,
"state" char(2) COLLATE "default" NOT NULL DEFAULT 'MA',
"city" varchar(50) COLLATE "default" NOT NULL DEFAULT 'São Luís',
"logradoutro" varchar(100) COLLATE "default" NOT NULL,
"neighborhood" varchar(50) COLLATE "default" NOT NULL,
"number" varchar(10) NOT NULL,
"cep" char(8),
"complement" varchar(100),
PRIMARY KEY ("id") 
)
WITHOUT OIDS;

COMMENT ON COLUMN "address_persons"."state" IS 'Abreviação da unidade federativa.';
COMMENT ON COLUMN "address_persons"."neighborhood" IS 'Bairro.';


ALTER TABLE "contact_persons" ADD CONSTRAINT "fk_contact_persons_persons_1" FOREIGN KEY ("persons_id") REFERENCES "people" ("id");
ALTER TABLE "complement_persons" ADD CONSTRAINT "fk_complement_persons_persons_1" FOREIGN KEY ("persons_id") REFERENCES "people" ("id");
ALTER TABLE "address_persons" ADD CONSTRAINT "fk_address_persons_persons_1" FOREIGN KEY ("persons_id") REFERENCES "people" ("id");

