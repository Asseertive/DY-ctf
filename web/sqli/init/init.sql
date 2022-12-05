CREATE TABLE dyhs.dy_simple_sqli(
  id VARCHAR(100) PRIMARY KEY,
  pw VARCHAR(100)
);

INSERT into dyhs.dy_simple_sqli VALUE (
    "admin",
    "DY{flag}"
);