export default class Client {

    constructor(dataSet) {
        this.dataSet = dataSet;
        this.dataTable;
        this.toolsButton = '' +
            '<button class="btn btn-primary" data-toggle="modal" data-target="#modal-xl-plus"><i class="fas fa-plus"></i></button> ' +
            '<button class="btn btn-warning" data-toggle="modal" data-target="#modal-xl-edit"><i class="fas fa-pencil-alt"></i></i></button> ' +
            '<button class="btn btn-danger" data-toggle="modal"><i class="fas fa-times"></i></button> ';
    }

    getClient(){
        // api back call for get all clients
        fetch('api/client')
            .then((response) => {
                return response.json();
            })
            .then((res) => {
                // set data for datatable
                for (let i = 0; i < res.data.length; i++){
                    let client = res.data[i];
                    this.dataSet[i] = [`${client.nom} ${client.prenom}`, client.email.length > 0 ? client.email : "<span class='text-danger'>Aucun email</span>", this.toolsButton ]
                }

                // config client datatable
                 this.dataTable = $('#dataTable').DataTable( {
                        data: this.dataSet,
                     select: {
                         style: 'multi'
                     },
                        columns: [
                            { title: "Nom" },
                            { title: "Email" },
                            { title: "Outils" },
                        ],

                    }
                );




            }).catch((err) => {
            console.log(err);
        })
    }

    // get datatable object
    getDataTable(){
        return this.dataTable;
    }

    // get button HTML
    getTools(){
        return this.toolsButton;
    }

}