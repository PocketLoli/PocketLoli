pog = 6
champ = 3
vis = 3
laud = 6
OOO = 6
tab = [pog,champ,vis,laud,OOO]

tab.sort();

for x in tab:
    print(x)

if tab[pog] == tab[champ] == tab[vis]:
    print("Liczby pog, champ i vis są równe")
if tab[champ] == tab[vis] == tab[laud]:
    print("Liczby champ, pog i vis są równe")
if tab[vis] == tab[laud] == tab[OOO]:
    print("Liczby vis, laud i OOO są równe")