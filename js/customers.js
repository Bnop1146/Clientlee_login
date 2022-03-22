export default class Customers {
    constructor() {
        this.data = {
            password: "Bnop1146"

        }

        this.rootElem = document.querySelector('.customers');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.dateSearch = this.filter.querySelector('.dateSearch');
        this.nameSearch = this.filter.querySelector('.nameSearch');
        this.numberSearch = this.filter.querySelector('.numberSearch');
        this.adresseSearch = this.filter.querySelector('.adresseSearch');
        this.emailSearch = this.filter.querySelector('.emailSearch');
        this.postSearch = this.filter.querySelector('.postSearch');
    }

    async init(){
        this.dateSearch.addEventListener('input', () => {
            this.render();
        });

        this.nameSearch.addEventListener('input', () => {
            this.render();
        });

        this.numberSearch.addEventListener('input', () => {
            this.render();
        });

        this.adresseSearch.addEventListener('input', () => {
            this.render();
        });

        this.emailSearch.addEventListener('input', () => {
            this.render();
        });


        this.postSearch.addEventListener('input', () => {
            this.render();
        });




        await this.render();

    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-12');

            col.innerHTML = `


<table class="table table-bordered align-middle">
  <tbody class="text-center  ">
    <tr class="tr-table">
          <td class="td-dato ">${item.kundeDato}</td>
          <td>${item.kundeNavn}</td>
          <td class="td-telefon"><a href="tel:${item.kundeTelefon}">${item.kundeTelefon}</a></td>
          <td class="td-email"><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=${item.kundeEmail}" target="_blank">${item.kundeEmail}</td>
          <td>${item.kundeAdresse}</td>
          <td class="td-post">${item.kundePost}</td>
          <td class="td-slet"><a href="delete.php?kundeId=${item.kundeId}"><i class="fa-solid fa-trash-can"></i></a></td>
          <td class="td-slet"><a href="edit.php?kundeId=${item.kundeId}" ><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
  </tbody>
</table>

                
                
              
                
                
            
            `;


            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)


    }


    async getData (){


        this.data.dateSearch = this.dateSearch.value;
        this.data.nameSearch = this.nameSearch.value;
        this.data.emailSearch = this.emailSearch.value;
        this.data.adresseSearch = this.adresseSearch.value;
        this.data.numberSearch = this.numberSearch.value;
        this.data.postSearch = this.postSearch.value;

        const response = await fetch('Api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}
