#
# Modifying pages table
#
CREATE TABLE pages (
    tx_pagesaddfields_customtitle varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_ausrichtunghorizontal varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_ausrichtungvertikal varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_color varchar(255) DEFAULT '' NOT NULL
);

#
# Modifying pages_language_overlay table
#
CREATE TABLE pages_language_overlay (
    tx_pagesaddfields_customtitle varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_ausrichtunghorizontal varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_ausrichtungvertikal varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_color varchar(255) DEFAULT '' NOT NULL
);
