# ansi_roles
My private ansible roles.

Don't claim to be perfect.

## Bareos roles
Fork of https://github.com/MaxBab/bareos-ansible for CentOS 8.

Installs Bareos with default CentOS 8 AppStream MariaDB packages.
Not tested with PostgreSQL

Example:

```
---
- name: Configure Backup server
  hosts: backup-server
  vars:
    database: mariadb
    db_version: 10.3
    mariadb_root_password: "ChangeMe"
    webui_admin_user: admin
    webui_admin_pass: "ChangeMe"
    client_password: "ChangeMe"
    mariadb_bareos_password: "ChangeMe"
  roles:
    - el_bareos-basic
    - el8_bareos-database
    - el8_bareos-director
    - el8_bareos-webui
```
