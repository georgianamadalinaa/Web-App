# Web-App
Acest proiect reprezintă o **aplicație web de gestiune pentru o agenție de turism**, dezvoltată în **PHP, MySQL, HTML, CSS și JavaScript**.   Scopul aplicației este de a oferi o platformă pentru administrarea clienților, destinațiilor și contractelor, cu funcționalități de căutare, filtrare, raportare și generare documente PDF.  
🔧 Funcționalități principale  
- 👥 **Gestionare clienți**: adăugare, modificare, ștergere, căutare și filtrare.  
- 🏖️ **Gestionare destinații**: administrarea ofertelor turistice (CRUD).  
- 📑 **Gestionare contracte**: creare, modificare, ștergere și vizualizare contracte.  
- 📊 **Rapoarte și statistici**:  
  - grafice interactive (`contract_chart.php`);  
  - rapoarte detaliate (`contract_raport.php`);  
  - export în format **PDF** (`contract_pdf.php`).  
- 🔐 **Autentificare**: login/logout pentru acces securizat.  
- 🎨 **Interfață responsive**: folosind CSS și JavaScript.  

---

📂 Structura proiectului  
- `client*.php` – module pentru gestionarea clienților  
- `destinatie*.php` – module pentru gestionarea destinațiilor  
- `contract*.php` – module pentru gestionarea contractelor + rapoarte și PDF  
- `config.php` – conexiune la baza de date  
- `home.php` – pagina principală  
- `login.php` / `logout.php` – autentificare utilizatori  
- `style.css`, `script.js` – interfață grafică  
- `fpdf/` – librărie pentru generare PDF

  🛠️ Tehnologii utilizate  
Backend: PHP, MySQL  
Frontend: HTML, CSS, JavaScript, jQuery  
Biblioteci externe: FPDF pentru PDF, Chart.js (sau echivalent JS) pentru grafice


