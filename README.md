**⚠️ LET OP: DIT PROJECT IS NOG IN PRODUCTIE EN IS DUS NIET AF, SOMMIGE FUNCTIONALITEITEN MISSEN ⚠️**

**⚠️ LET OP: DIT PROJECT IS PUUR EDUCATIEF EN IS NIET GEMAAKT VOOR PROFESSIONELE DOELEINDEN ⚠️**

# Schoolproject Gemeente Voorne aan Zee

Hallo, wij zijn Danilio, Dylan en Lisa. Wij studeren de opleiding Software Developer niveau 4. Dit project vormt het sluitstuk van ons schooltraject. 

Wij kregen dit als opdracht een website te maken voor een gemeente. Op deze website moeten burgers de mogelijkheid hebben een klacht in te dienen. Medewerkers van de gemeente krijgen deze klachten te zien op hun dasboard. Ook moet er een OpenStreetMap geïmplementeerd zijn waarbij 'pins' worden vertoond die de klachten weergeven.

## Vereisten

Voordat je dit project kunt gebruiken, moet je Laravel geïnstalleerd hebben op je systeem. Zorg ervoor dat je aan deze vereiste voldoet voordat je verdergaat.

## Installatie

Volg deze stappen om het project lokaal op te zetten:

1. Clone de repository naar je lokale machine.
2. Navigeer naar de projectmap via de terminal.
3. Voer `composer install` uit om de afhankelijkheden te installeren.
4. Maak een kopie van het `.env.example` bestand en hernoem het naar `.env`.
5. Configureer de databaseverbinding in het `.env` bestand.
6. Voer `php artisan key:generate` uit om een applicatiesleutel te genereren.
7. Voer `php artisan migrate` uit om de database structuur op te zetten met behulp van migrations.

## Gebruik

Eenmaal geïnstalleerd, kun je het project uitvoeren door de volgende stappen te volgen:

1. Voer `php artisan serve` uit om de ontwikkelingsserver te starten.
2. Open je browser en ga naar `http://localhost:8000` (of de poort die wordt weergegeven in je terminal) om de applicatie te bekijken.

## Functionaliteiten medewerker

Om alle functionaliteiten te hebben moet u de functie medewerker hebben. Volg de volgende stappen om hiervoor te zorgen:

1. Maak een account aan door te registreren.
2. Navigeer naar uw database.
3. Ga naar de tabel 'users'.
4. Wijzig in de kolom 'is_medewerker' de '0' naar een '1'.
5. Nu heeft u de functionaliteiten van een medewerker.

---
