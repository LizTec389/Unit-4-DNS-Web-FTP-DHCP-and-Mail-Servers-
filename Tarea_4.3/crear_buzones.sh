#!/bin/bash
# Script para crear la estructura Maildir de usuarios de correo
# Práctica 4.3 - Servidor de Correo Postfix + Dovecot

USUARIOS=("usuario1" "usuario2")

for USUARIO in "${USUARIOS[@]}"; do
    echo "Creando buzón Maildir para: $USUARIO"
    mkdir -p /home/$USUARIO/Maildir/{new,cur,tmp}
    chown -R $USUARIO:$USUARIO /home/$USUARIO/Maildir
    chmod -R 700 /home/$USUARIO/Maildir
    echo "✅ Buzón creado para $USUARIO"
done

echo "Todos los buzones han sido creados correctamente."
