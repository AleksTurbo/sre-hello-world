CREATE TABLE IF NOT EXISTS sre.author
(
    id integer NOT NULL DEFAULT nextval('author_id_seq'::regclass),
    name character varying(100) COLLATE pg_catalog."default"
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS sre.author
    OWNER to postgres;

REVOKE ALL ON TABLE sre.author FROM sre;

GRANT UPDATE, INSERT, SELECT, REFERENCES, TRIGGER, DELETE ON TABLE sre.author TO aleksturbo;

GRANT DELETE, INSERT, REFERENCES, SELECT, TRIGGER, UPDATE ON TABLE sre.author TO postgres;

GRANT SELECT ON TABLE sre.author TO PUBLIC;