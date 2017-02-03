INSERT INTO journal_mood (mood) VALUES ('Happy');
INSERT INTO journal_mood (mood) VALUES ('Sad');
INSERT INTO journal_mood (mood) VALUES ('Excited');
INSERT INTO journal_mood (mood) VALUES ('Somber');

INSERT INTO journal_date (month, day, year) VALUES (12, 13, 2016);
INSERT INTO journal_date (month, day, year) VALUES (12, 14, 2016);
INSERT INTO journal_date (month, day, year) VALUES (12, 19, 2016);
INSERT INTO journal_date (month, day, year) VALUES (12, 25, 2016);
INSERT INTO journal_date (month, day, year) VALUES (12, 28, 2016);
INSERT INTO journal_date (month, day, year) VALUES (1, 06, 2017);

INSERT INTO journal_tag (tagname) VALUES ('party');
INSERT INTO journal_tag (tagname) VALUES ('family');
INSERT INTO journal_tag (tagname) VALUES ('school');
INSERT INTO journal_tag (tagname) VALUES ('hobby');

INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (1, (SELECT now()), 3, 2, 'What a great day.');
INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (2, (SELECT now()), 1, 2, 'I am happy today.');
INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (3, (SELECT now()), 1, 2, 'Happy again.');
INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (4, (SELECT now()), 2, 2, 'What a sad day.');
INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (5, (SELECT now()), 1, 2, 'Awesome day!');
INSERT INTO journal_entry (dateid_fk, entrytime, moodid_fk, tagid_fk, entry) VALUES (6, (SELECT now()), 4, 2, 'I am somewhat taken by surprise today. I just...');
