#!/bin/bash
set -e

set POSTGRES_USER=aleksturbo
set POSTGRES_DB=POSTGRES_DB

psql -v ON_ERROR_STOP=1 -U "$POSTGRES_USER" -d "$POSTGRES_DB" -c "CREATE TABLE author (id SERIAL, name VARCHAR(100));"
psql -v ON_ERROR_STOP=1 -U "$POSTGRES_USER" -d "$POSTGRES_DB" -c "INSERT INTO author (name) VALUES ('John'), ('Alex');"
