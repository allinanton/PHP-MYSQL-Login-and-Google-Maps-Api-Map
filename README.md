# Raport Proiect PAI - Dezvoltare Website Personal și Aplicație Web

## Introducere
Proiectul pentru Programarea Aplicațiilor Internet (PAI) a constat în crearea unui website personal și a unei aplicații web interactive. Website-ul a fost conceput pentru a prezenta în detaliu proiectele academice, în timp ce aplicația web a integrat funcționalități precum autentificarea și afișarea interactivă a locurilor vizitate pe hartă.

## Structura Proiectului
Website-ul este format din pagini HTML și PHP, cu stilizare prin fișiere CSS și îmbunătățiri de funcționalitate cu ajutorul JavaScript.

- `index.html` (CV): Această pagină servește ca hub central, oferind o prezentare detaliată a proiectelor academice și facilitând navigarea interactivă în cadrul CV-ului.
- `login.php`: Această pagină facilitează autentificarea utilizatorilor prin sesiuni PHP, cu o interfață simplă și intuitivă. După autentificare reușită, utilizatorii sunt redirecționați către pagina principală (`index.php`), iar în caz de eșec, primesc mesaje explicative.
- `logout.php`: Gestionează procesul de deconectare, redirecționând utilizatorii către pagina de autentificare. Asigură închiderea sesiunii pentru menținerea securității.
- `map.php`: Această pagină prezintă o hartă Google interactivă, evidențiind locurile vizitate de utilizator în baza de date. Coordonatele geografice sunt extrase dintr-o bază de date MySQL.
- `register.php`: Pagina permite utilizatorilor să se înregistreze prin completarea unui formular, contribuind astfel la extinderea bazei de date.
- `reglog.php`: Centralizează procesele de autentificare și înregistrare, oferind o interfață intuitivă și redirecționare corespunzătoare. 
- `index.php`: Pagina de după autentificare servește ca punct central de acces, oferind butoane pentru acces rapid la hartă sau CV.

## Implementare Tehnică
Implementarea tehnică a proiectului s-a bazat pe utilizarea sesiunilor PHP pentru gestionarea stării de autentificare și pe crearea a două tabele MySQL (`users` și `points`) pentru stocarea datelor necesare funcționalităților. Datele despre utilizatori și punctele pe hartă sunt gestionate eficient prin interacțiunea cu baza de date.




![image](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/eb51877b-aaa5-4f75-86e5-279b63090c14)
1.1	Login page (non logged)


![image](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/eea9fac6-81b4-4902-8e13-c700acbc1c36)
1.2	Front page (after successful login)

![image](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/75956895-7150-4e7b-9f51-60a868acb26c)
1.3	Cv page (after interacting with the cv button)

![image](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/739d0d00-569e-42b9-9428-2dd36a6da563)
1.4 Map page (after interacting with map button)



