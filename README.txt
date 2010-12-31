The DBTNG project is an abstracted, object-oriented query builder for PHP.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

http://www.gnu.org/licenses/old-licenses/gpl-2.0.html


ABOUT
-----

DBTNG began life as the database layer for the Drupal CMS. However,
after some prodding from outside projects the maintainers decided
that it was best to try and split it off as its own stand-alone project.

The project goals and standards are as follows:

- DBTNG should be a stand-alone library with no external dependences other
than PHP 5.2 and the PDO database library.  It should conform to PHP E_STRICT
error-checking standards.

- DBTNG is not an Object-Relational Mapper (ORM). It is an SQL abstraction
built atop PDO with the aim of making working with SQL easier, and of
making cross-DB queries easier to write in a standard way.

- The goal of DBTNG is not to abstract away all knowledge of SQL or data
storage. It is to make it easier for developers with a knowledge of SQL to
work with SQL databases in a powerful and robust way. It therefore follows
that non-SQL databases are not relevant to DBTNG.

- All code in DBTNG should conform to the relevant Drupal coding standards as
documented at: http://drupal.org/coding-standards

- The target SQL dialect where possible is ANSI SQL 2003.

- Although procedural wrappers may be provided as a convenience for developers,
all non-trivial code is expected to be Object-Oriented and follow good
Object-Oriented principles.

- Due to the considerable difference between different SQL implementations,
it can take both time and complexity to add and maintain support for
additional database backends. The developers have only limited resources
to support any given database. As this is a GPL project, Free Software
databases receive priority over proprietary databases. However, all
SQL-compatible databases are considered potential targets.

- DBTNG should be cleanly extensible by 3rd party projects that wish to use it.

- In case of conflict, consider security over extensibility over functionality
over usability over performance over ANSI-standard compliance.


CREDITS
-------

DBTNG originates from Drupal 7.  Its principal architect is Larry Garfield (Crell),
with substantial input from Károly Négyesi (chx). Other co-maintainers later
joined, including Damien Tournoud, David Strauss, and Josh Waihi. Dozens of
other people helped in its development as well.

It is currently maintained by Larry Garfield and developed by anyone who
wants to help. :-)