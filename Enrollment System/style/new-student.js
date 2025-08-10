const data = {
  region_iva: {
    Cavite: {
      Silang: ["Sabutan", "Anahaw", "Adlas"],
      TreceMartiresCity: ["Aguado", "Perez", "Lapidario", "Conchu", "Cabuco", "San Agustin", "Lapidario", "Cabezas", "Osorio", "De Ocampo", "Llana", "Gregorio", "Luciano"]
    },
    Laguna: {
      Calamba: ["Canlubang", "Real"],
      StaRosa: ["Market Area"]
    }
  },
  ncr: {
    Manila: {
      Tondo: ["Zone 1", "Zone 2"],
      Sampaloc: ["Barangay 395"]
    }
  }
};

const regionEl = document.getElementById("region");
const provinceEl = document.getElementById("province");
const cityEl = document.getElementById("city");
const barangayEl = document.getElementById("barangay");

regionEl.addEventListener("change", () => {
  provinceEl.innerHTML = '<option value="">-- Select Province --</option>';
  cityEl.innerHTML = '<option value="">-- Select City --</option>';
  barangayEl.innerHTML = '<option value="">-- Select Barangay --</option>';
  provinceEl.disabled = true;
  cityEl.disabled = true;
  barangayEl.disabled = true;

  const region = regionEl.value;
  if (region && data[region]) {
    for (let province in data[region]) {
      const opt = document.createElement("option");
      opt.value = province;
      opt.textContent = province;
      provinceEl.appendChild(opt);
    }
    provinceEl.disabled = false;
  }
});

provinceEl.addEventListener("change", () => {
  cityEl.innerHTML = '<option value="">-- Select City --</option>';
  barangayEl.innerHTML = '<option value="">-- Select Barangay --</option>';
  cityEl.disabled = true;
  barangayEl.disabled = true;

  const region = regionEl.value;
  const province = provinceEl.value;
  if (region && province && data[region][province]) {
    for (let city in data[region][province]) {
      const opt = document.createElement("option");
      opt.value = city;
      opt.textContent = city;
      cityEl.appendChild(opt);
    }
    cityEl.disabled = false;
  }
});

cityEl.addEventListener("change", () => {
  barangayEl.innerHTML = '<option value="">-- Select Barangay --</option>';
  barangayEl.disabled = true;

  const region = regionEl.value;
  const province = provinceEl.value;
  const city = cityEl.value;
  if (region && province && city && data[region][province][city]) {
    for (let barangay of data[region][province][city]) {
      const opt = document.createElement("option");
      opt.value = barangay;
      opt.textContent = barangay;
      barangayEl.appendChild(opt);
    }
    barangayEl.disabled = false;
  }
});

document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const body = document.body;
    
    if (window.innerWidth <= 885) {
        body.classList.add('collapsed');
    }
    
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            body.classList.toggle('collapsed');
        });
    }
    
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const navbarToggler = document.querySelector('.navbar-toggler');
        
        if (window.innerWidth <= 885 && 
            !body.classList.contains('collapsed') && 
            !sidebar.contains(event.target) && 
            !navbarToggler.contains(event.target)) {
            body.classList.add('collapsed');
        }
    });
  
    window.addEventListener('resize', function() {
        if (window.innerWidth > 885) {
            body.classList.remove('collapsed');
        } else {
            body.classList.add('collapsed');
        }
    });
});