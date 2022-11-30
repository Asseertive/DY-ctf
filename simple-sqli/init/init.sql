CREATE TABLE dyhs.simple_sqli(
  id VARCHAR(100) PRIMARY KEY,
  pw VARCHAR(100)
);

INSERT into dyhs.simple_sqli VALUE (
    "admin",
    "DY{fakeflag}"
);