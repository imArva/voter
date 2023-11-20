import Swal from "sweetalert2";

let cId = window.data.cid;

document.getElementById("add-card").addEventListener("click", () => {
    // Mendapatkan elemen parent dengan id "cardss"
    let cardssParent = document.getElementById("cardss");

    // Mendapatkan semua elemen div dalam parent "cardss"
    let divElements = cardssParent.querySelectorAll("div");

    // Iterasi melalui semua elemen div
    divElements.forEach(function (element) {
        // Mendapatkan id dari elemen
        let elementId = element.id;

        // Memeriksa apakah id sesuai dengan pola yang diinginkan

        if (elementId.startsWith("t-t-")) {
            cId = parseInt(elementId.split("-")[2]) + 1;
        }
    });

    const newCard = document.createElement("div");
    newCard.classList.add(
        "cards",
        "flex",
        "flex-col",
        "items-center",
        "bg-white",
        "border",
        "border-gray-200",
        "rounded-lg",
        "shadow",
        "md:flex-row",
        "md:max-w-xl",
        "hover:bg-gray-100",
        "dark:border-gray-700",
        "dark:bg-gray-800",
        "dark:hover:bg-gray-700",
        "mb-6"
    );

    // Isi konten card baru
    newCard.innerHTML = `
                <div class="flex items-center justify-center w-full h-full p-5">
                <label for="dropzone-file-${cId}" class="flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg w-full h-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <div id="file-text-${cId}" class="flex flex-col items-center justify-center">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload photo</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG</p>
                        </div>
                        <img id="uploaded-image-${cId}" class="hidden mt-2" />
                    </div>
                    <p id="editText-${cId}" class="hidden text-gray-500 font-semibold">Click to change photo</p>
                    <input id="dropzone-file-${cId}" type="file" class="hidden" onchange="previewImage(event, ${cId})" />
                </label>
            </div>
                  
            <div class="flex flex-col justify-between p-4 w-full leading-normal">
                      <div class="w-full group">

                          <div id="t-${cId}" contenteditable="true" contenteditable="true" class="no-p w-full max-w-full text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-2 border-b-2 focus:border-b-secondary focus:outline-none">
                              <h1>masukan judul disini</h1>
                          </div>
                          
                          <div id="t-t-${cId}" class="w-full border-none group-focus-within:block hidden "> 

                              <button class="ql-underline"></button>
                              <button class="ql-italic"></button>
                              <button class="ql-link"></button>
                              <select class="ql-align">
                                  <option selected=""></option>
                                  <option value="center"></option>
                                  <option value="right"></option>
                                  <option value="justify"></option>
                              </select>
                              
                              
                            
                          </div>
                      </div>
                      <div class="w-full group">
                          <div id="d-${cId}" contenteditable="true" class="no-p mb-3 w-full min-w-full max-w-full text-gray-700 border-b-2 focus:border-b-secondary focus:outline-none">
                                <p>
                                masukan deskripsi disini
                                </p>
                              
                          </div>
                          <div id="d-t-${cId}" class="w-full border-none group-focus-within:block hidden"> 

                              <button class="ql-bold"></button>
                              <button class="ql-italic"></button>
                              <button class="ql-underline"></button>
                              <button class="ql-link"></button>
                              <select class="ql-align">
                                  <option selected=""></option>
                                  <option value="center"></option>
                                  <option value="right"></option>
                                  <option value="justify"></option>
                              </select>
                              <button class="ql-list" value="ordered" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button>
                              <button class="ql-list" value="bullet" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button>
                              
                            
                          </div>
                      </div>
                      
                  </div>
  `;

    // Temukan elemen terakhir dengan kelas ".flex" (kard terakhir)
    const lastCard = document.querySelector(".cards:last-child");{{  }}

    // Sisipkan card baru setelah card terakhir{{  }}{{  }}
    lastCard.parentNode.insertBefore(newCard, lastCard.nextSibling);

    const script = document.createElement("script");
    script.textContent = `
      let quill_t_${cId} = new Quill('#t-${cId}', {
          theme: 'snow',
          placeholder: 'Add title',
          modules: {
              toolbar: {
                  container: '#t-t-${cId}',
              }
          }
      });

      let quill_d_${cId} = new Quill('#d-${cId}', {
          theme: 'snow',
          placeholder: 'Add description',
          modules: {
              toolbar: {
                  container: '#d-t-${cId}',
              }
          }
      });
  `;
    document.body.appendChild(script);
});

let quill_d = new Quill("#description", {
    theme: "snow",
    placeholder: "Add description",
    modules: {
        toolbar: {
            container: "#desc-toolbar",
        },
    },
});

let quill_t = new Quill("#title", {
    theme: "snow",
    placeholder: "Add description",
    modules: {
        toolbar: {
            container: "#title-toolbar",
        },
    },
});

let saveBtn = document.getElementById("saveLinkBtn");

let votingId = document.getElementById("voting-id").value;
let title = document.querySelector("#title .ql-editor");
let description = document.querySelector("#description .ql-editor");

let body = {};
function generateBody() {
    
    for (let i = 1; i <= cId; i++) {
        let title = document.querySelector(`#t-${i} .ql-editor`).innerHTML;
        let desc = document.querySelector(`#d-${i} .ql-editor`).innerHTML;
        
        let bodyBuffer = { title: title, description: desc };
        body[i] = bodyBuffer;
    }
}

saveBtn.addEventListener("click", () => {
    generateBody();

    // Dapatkan semua elemen input file
    const fileInputs = document.querySelectorAll('input[type="file"]');
           
    // Buat objek FormData
    const formData = new FormData();
    formData.append('id', votingId);
    formData.append('title', title.innerHTML);
    formData.append('description', description.innerHTML);
    formData.append('body', JSON.stringify(body));
    formData.append('cid', cId);

    // Iterasi melalui setiap input file dan tambahkan ke FormData
    fileInputs.forEach((fileInput, index) => {
        formData.append(`file-input-${index + 1}`, fileInput.files[0]);
    });
    
    axios
        .post("/api/savelink", formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(function (response) {
            // Mendapatkan iterator dari pasangan kunci-nilai FormData
            // const formDataEntries = formData.entries();

            // Iterasi melalui setiap pasangan kunci-nilai
            // for (const pair of formDataEntries) {
            //     console.log(pair[0], pair[1]);
            // }

            Swal.fire({
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1000,
            });
        })
        .catch(function (error) {
            // Mendapatkan iterator dari pasangan kunci-nilai FormData
            // const formDataEntries = formData.entries();

            // Iterasi melalui setiap pasangan kunci-nilai
            // for (const pair of formDataEntries) {
            //     console.log(pair[0], pair[1]);
            // }
            console.log(error);
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "See console for more info",
                showConfirmButton: false,
                timer: 1000,
            });
        });
});

