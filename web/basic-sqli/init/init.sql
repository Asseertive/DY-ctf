CREATE TABLE dyhs.dy_basic_sqli(
  id VARCHAR(100) PRIMARY KEY,
  pw VARCHAR(100)
);

INSERT into dyhs.dy_basic_sqli VALUE (
    "admin",
    "DY{flag}"
);