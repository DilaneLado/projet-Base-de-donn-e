document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const menuItem = this.parentElement;
            
            // Fermer tous les autres menus ouverts
            document.querySelectorAll('.nav-item').forEach(item => {
                if (item !== menuItem) {
                    item.classList.remove('active');
                }
            });
            
            // Ouvrir/fermer le menu cliqué
            menuItem.classList.toggle('active');
        });
    });
    
    // Fermer les menus quand on clique ailleurs
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-item')) {
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
            });
        }
    });
    
    function bookAppointment(event) {
        event.preventDefault();
        
        const centre = document.getElementById('appointmentCentre').value;
        const date = document.getElementById('appointmentDate').value;
        const reason = document.getElementById('appointmentReason').value;
        
        // Ici, vous devriez envoyer ces données au serveur via AJAX
        alert(`Rendez-vous confirmé!\nCentre: ${centre}\nDate: ${new Date(date).toLocaleString()}\nMotif: ${reason}`);
        
        // Réinitialiser le formulaire
        document.getElementById('appointmentForm').reset();
    }