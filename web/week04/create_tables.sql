CREATE TABLE journal_mood
(
  MoodId SERIAL NOT NULL PRIMARY KEY,
  Mood VARCHAR(16)
);

CREATE TABLE journal_date
(
  DateId SERIAL NOT NULL PRIMARY KEY,
  Month SMALLINT NOT NULL,
  Day SMALLINT NOT NULL,
  Year INT NOT NULL
);

CREATE TABLE journal_tag
(
  TagId SERIAL NOT NULL PRIMARY KEY,
  TagName VARCHAR(30)
);

CREATE TABLE journal_entry
(
  EntryId SERIAL NOT NULL PRIMARY KEY,
  DateId_fk INT NOT NULL REFERENCES journal_date(DateId),
  EntryTime TIME NOT NULL,
  MoodId_fk INT NOT NULL REFERENCES journal_mood(MoodId),
  TagId_fk INT NOT NULL REFERENCES journal_tag(TagId),
  entry TEXT
);