CREATE TABLE "User" (
	"idUser" serial NOT NULL,
	"username" varchar NOT NULL,
	"usermail" varchar NOT NULL,
	"userpassword" varchar NOT NULL,
	"usercookie" varchar,
	CONSTRAINT User_pk PRIMARY KEY ("idUser")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "World" (
	"idWorld" serial NOT NULL,
	"WorldName" varchar NOT NULL,
	"WorldInfos" TEXT,
	"idUser" integer NOT NULL,
	CONSTRAINT World_pk PRIMARY KEY ("idWorld")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "Country" (
	"idCountry" serial NOT NULL,
	"CountryName" varchar NOT NULL,
	"Capital" varchar,
	"CountryInfos" TEXT,
	"idWorld" integer NOT NULL,
	CONSTRAINT Country_pk PRIMARY KEY ("idCountry","idWorld")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "City" (
	"idCity" integer NOT NULL,
	"CityInfos" TEXT,
	"idCountry" integer,
	CONSTRAINT City_pk PRIMARY KEY ("idCity")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "Race" (
	"idRace" serial NOT NULL,
	"RaceName" varchar NOT NULL,
	"RaceInfos" TEXT,
	"iduser" integer NOT NULL,
	CONSTRAINT Race_pk PRIMARY KEY ("idRace")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "Character" (
	"idCharacter" serial NOT NULL,
	"charactername" varchar NOT NULL,
	"CharacterAge" integer,
	"CharacterInfos" TEXT,
	"idRace" integer,
	"idUser" integer,
	CONSTRAINT Character_pk PRIMARY KEY ("idCharacter")
) WITH (
  OIDS=FALSE
);




ALTER TABLE "World" ADD CONSTRAINT "World_fk0" FOREIGN KEY ("idUser") REFERENCES "User"("idUser");

ALTER TABLE "Country" ADD CONSTRAINT "Country_fk0" FOREIGN KEY ("Capital") REFERENCES "City"("idCity");
ALTER TABLE "Country" ADD CONSTRAINT "Country_fk1" FOREIGN KEY ("idWorld") REFERENCES "World"("idWorld");

ALTER TABLE "City" ADD CONSTRAINT "City_fk0" FOREIGN KEY ("idCountry") REFERENCES "Country"("idCountry");

ALTER TABLE "Race" ADD CONSTRAINT "Race_fk0" FOREIGN KEY ("iduser") REFERENCES "User"("idUser");

ALTER TABLE "Character" ADD CONSTRAINT "Character_fk0" FOREIGN KEY ("idRace") REFERENCES "Race"("idRace");
ALTER TABLE "Character" ADD CONSTRAINT "Character_fk1" FOREIGN KEY ("idUser") REFERENCES "User"("idUser");

