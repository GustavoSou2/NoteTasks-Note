SELECT notes.idNotes,  notes.titleNote, notes.descriptionNote, notes.textNote FROM notes inner join usuario on usuario.idUsuario = notes.idNotes WHERE usuario.idUsuario =  3  