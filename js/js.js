function koltseg_szamitas() {
    let ar = 250;
    let nm = document.querySelector("input[name='darab-szam']");
    let beirt_nm = parseInt(nm.value);
    beirt_nm = isNaN(beirt_nm) ? 0 : beirt_nm;
    fizetendo(ar, beirt_nm);
}

function fizetendo(ar, beirt_nm){
  
  let kk_osszesen = document.querySelector("span.fizetendo-osszesen");
  if (beirt_nm > 65) {
      alert("A házban nincs 65 négyzetméteresnél nagyobb ingatlan!");
  }else if (beirt_nm < 2) {
      alert ("A házban nincs 2 négyzetméteresnél kisebb ingatlan!");
  }else {
      let k_koltseg = beirt_nm * ar;
      kk_osszesen.innerHTML = k_koltseg;
  }  
}

