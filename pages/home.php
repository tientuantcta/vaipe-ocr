<div class="mb-3">
    <h3 id="processingText" class="text-center font-weight-bold progressTextupload">Trích xuất thông tin tài liệu tự động</h3>
    <p class="text-center "  >(Bóc tách và số hoá tốt nhất trên các văn bản hành chính, hóa đơn, giấy tờ nói chung)</p>
</div>

<div class="box-select box-selectHide selectboxstyle">
    <div class="mb-2">
        <p>Loại tài liệu</p> 
        <a style=" 
    display: none;" class="other-sl" href="/vapeorg">Khác</a>
       
    </div>
    <div class="form-group" >
        <select id="selectDocument" class="form-select" aria-label="Select Document"  style="
    width: 558px;
">
            <option selected>Lựa chọn tài liệu</option>
            <option value="anh">Ảnh</option>
            <option value="donthuoc">Đơn thuốc</option>
            <option value="cccd">Căn cước công dân</option>
            <option value="gplx">Giấy phép lái xe</option>
            <option value="dkot">Đăng ký ô tô, xe máy</option>
            <option value="gcndn">Giấy chứng nhận đăng ký doanh nghiệp</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    
</div>

<div class="box-upload" id="uploadContainer">
   <div class="d-hide">
   <div class="upload">
        <label for="avatarInput">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                <!-- Mã SVG -->
                <path d="M21.0258 65.4999C19.342 65.4999 17.9168 64.9166 16.7501 63.7499C15.5834 62.5832 15.0001 61.158 15.0001 59.4742V52.9358C15.0001 52.2264 15.2394 51.6324 15.7181 51.1538C16.1967 50.6752 16.7907 50.4359 17.5001 50.4359C18.2095 50.4359 18.8035 50.6752 19.2821 51.1538C19.7607 51.6324 20 52.2264 20 52.9358V59.4742C20 59.7307 20.1068 59.9658 20.3205 60.1795C20.5342 60.3932 20.7693 60.5 21.0258 60.5H58.9743C59.2307 60.5 59.4658 60.3932 59.6795 60.1795C59.8932 59.9658 60 59.7307 60 59.4742V52.9358C60 52.2264 60.2393 51.6324 60.7179 51.1538C61.1965 50.6752 61.7905 50.4359 62.4999 50.4359C63.2093 50.4359 63.8033 50.6752 64.2819 51.1538C64.7606 51.6324 64.9999 52.2264 64.9999 52.9358V59.4742C64.9999 61.158 64.4166 62.5832 63.2499 63.7499C62.0833 64.9166 60.658 65.4999 58.9743 65.4999H21.0258ZM37.5001 25.1281L31.0898 31.5383C30.5941 32.0341 30.0055 32.2787 29.3238 32.2723C28.6422 32.2659 28.0429 32.0041 27.5258 31.4871C27.0429 30.97 26.7929 30.3845 26.7758 29.7307C26.7587 29.0769 27.0087 28.4914 27.5258 27.9743L37.8911 17.6091C38.203 17.2971 38.5321 17.0771 38.8783 16.9488C39.2244 16.8206 39.5983 16.7565 40 16.7565C40.4017 16.7565 40.7756 16.8206 41.1218 16.9488C41.4679 17.0771 41.797 17.2971 42.1089 17.6091L52.4743 27.9743C52.97 28.4701 53.2146 29.0502 53.2082 29.7147C53.2018 30.3792 52.9571 30.97 52.4743 31.4871C51.9571 32.0041 51.3631 32.2712 50.6923 32.2883C50.0213 32.3054 49.4273 32.0554 48.9102 31.5383L42.4999 25.1281V50.6282C42.4999 51.3376 42.2606 51.9316 41.782 52.4102C41.3034 52.8889 40.7094 53.1282 40 53.1282C39.2906 53.1282 38.6966 52.8889 38.218 52.4102C37.7394 51.9316 37.5001 51.3376 37.5001 50.6282V25.1281Z" fill="#3D88E1"/>
            </svg>
            <input type="file" id="avatarInput" style="display: none" accept="image/jpeg, image/png, application/pdf">
        </label>
    </div>
    <div class="avatar" id="avatarSection" style="display: none;">
        <img class="mb-2" id="avatarPreview" src="" alt="avatar">
        <p>Tải ảnh lên</p>
    </div>
    <p>Định dạng hỗ trợ gồm JPG, JPEG, PNG, PDF</p>

   </div>
    <!-- Thêm một div mới để chứa thanh tiến trình -->
    <div class="progress-box text-center" style="display: none;" id="uploadProgressBox">
        <div class="progress" id="uploadProgress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0"
                aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span id="innerProgressText">0%</span>
            </div>
        </div>
    </div>
</div>

<div id="resultSection" class="mt-5" style="display: none;">
    <!-- Displaying processed image and information after processing -->
    <div class="row">
        <div class="col-6" style="min-width: 500px;">
            <h4>Ảnh đã xử lý</h4>
            <img id="processedImage" alt="Processed Image" class="img-fluid">
        </div>
        <div class="col-6" style="min-width: 500px;">
            <h4>Thông tin</h4>
            <table class="table tabletext">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thông tin</th>
                    </tr>
                </thead>
                <tbody id="infoTableBody"></tbody>
            </table>
            <div id="medicationInfoSection" class="mt-5" style="max-height: 21em; overflow-y: auto;">
                <!-- Table for medication information -->
                <table class="table tabledonthuoc">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên thuốc</th>
                            
                        </tr>
                    </thead>
                    <tbody id="medicationTableBody"></tbody>
                </table>
            </div>
            <div id="cccdSection" class="mt-5" style="max-height: 21em; overflow-y: auto;">
                <!-- Table for medication information -->
                <table class="table tablecancuoc">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Căn cước</th>
                            
                        </tr>
                    </thead>
                    <tbody id="cccdTableBody"></tbody>
                </table>
            </div>
            <div id="gplx" class="mt-5" style="max-height: 21em; overflow-y: auto;">
                <!-- Table for medication information -->
                <table class="table tablegplx">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Giấy phép lái xe</th>
                            
                        </tr>
                    </thead>
                    <tbody id="gplxTableBody"></tbody>
                </table>
            </div>
            <div id="dkot" class="mt-5" style="max-height: 21em; overflow-y: auto;">
    <!-- Table for medication information -->
    <table class="table tablegpoto">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Giấy phép ô tô</th>
            </tr>
        </thead>
        <tbody id="gpotTableBody"></tbody>
    </table>
</div>

            <div id="cndn" class="mt-5" style="max-height: 21em; overflow-y: auto;">
                <!-- Table for medication information -->
                <table class="table tablecndn">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Giấy chứng nhận</th>
                            
                        </tr>
                    </thead>
                    <tbody id="cndnTableBody"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div style="
    display: flex;
    justify-content: center;
" class="mt-5">
    
<button id="btn-upload" class="btn-upload" onclick="extractInfo()" disabled>
    Trích xuất thông tin
</button>
<button onclick="downloadTable()" class="btn-download" style="display: none;">
 
  Tải xuống kết quả
</button>

</div>
<script>
    
    
  document.getElementById('avatarInput').addEventListener('change', async function (event) {
    const preview = document.getElementById('avatarPreview');
    const avatarSection = document.getElementById('avatarSection');
    const file = event.target.files[0];
    const uploadProgress = document.getElementById('uploadProgress');
    const btnUpload = document.getElementById('btn-upload');
    const selectDocument = document.getElementById('selectDocument');
    const infoTableBody = document.getElementById('infoTableBody');
    const boxUpload = document.querySelector('#box-upload');
   
    
    if (file) {
        const reader = new FileReader();

        reader.onload = async function (e) {
            preview.src = e.target.result;

            avatarSection.style.display = 'block';
            btnUpload.removeAttribute('disabled');

            const ocrResult = await performOCR(e.target.result);
            displayTextInTable(ocrResult, infoTableBody);
        };

        reader.readAsDataURL(file);
    }
});

function downloadTable() {
    const selectedDocument = document.getElementById('selectDocument').value;

    let tableBody;
    switch (selectedDocument) {
        case 'anh':
            tableBody = document.querySelector('#infoTableBody');
            break;
        case 'donthuoc':
            tableBody = document.querySelector('#medicationTableBody');
            break;
        case 'cccd':
            tableBody = document.querySelector('#cccdTableBody');
            break;
        case 'gplx':
            tableBody = document.querySelector('#gplxTableBody');
            break;
        case 'dkot':
            tableBody = document.querySelector('#gpotTableBody');
            break;
        case 'gcndn':
            tableBody = document.querySelector('#cndnTableBody');
            break;
        default:
            // Handle default case or do nothing
            break;
    }

    if (tableBody && tableBody.innerHTML.trim() !== '') {
        downloadTableContent(tableBody.outerHTML, `${selectedDocument}_data.html`);
    } else {
        console.error('Table body is empty or not present.');
    }
}


     function downloadTableContent(tableContent, fileName) {
        const blob = new Blob([tableContent], { type: 'text/html' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = fileName;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

async function extractInfo() {
    const medicationInfoSection = document.getElementById("medicationInfoSection");
    const tbDonthuoc = document.querySelector('.tabledonthuoc');
    const tableCancuoc = document.querySelector('.tablecancuoc');
    const tablegplx = document.querySelector('.tablegplx');
    const tablegpoto = document.querySelector('.tablegpoto');
    const tablecndn = document.querySelector('.tablecndn');
    const tbText = document.querySelector('.tabletext');
    
    const boxSelectAdd = document.querySelector('.box-select');
    const btnDownload = document.querySelector('.btn-download');
    boxSelectAdd.classList.add("selectHide")
    tbText.style.display = "none";
    tableCancuoc.style.display = "none";
    tbDonthuoc.style.display = "none";
    tablegplx.style.display = "none";
    tablegpoto.style.display = "none";
    tablecndn.style.display = "none";
    document.querySelector('.form-select').style.display = 'none';
    document.querySelector('.other-sl').style.display = 'block';
    
    
    const fileInput = document.getElementById('avatarInput');
    const uploadContainer = document.getElementById('uploadContainer');
    const uploadProgress = document.getElementById('uploadProgress');
    const progressText = document.getElementById('innerProgressText');
    const resultSection = document.getElementById('resultSection');
    const processedImage = document.getElementById('processedImage');
    const cccdTableBody = document.getElementById('cccdTableBody');
    const cndnTableBody = document.getElementById('cndnTableBody');
    const gplxTableBody = document.getElementById('gplxTableBody');
    const gpotTableBody = document.getElementById('gpotTableBody');
    
    
    const medicationTableBody = document.getElementById('medicationTableBody');
    const selectDocument = document.getElementById('selectDocument');
    const progressBox = document.getElementById('uploadProgressBox');
    const boxUploadProgressBar = document.querySelector('.progress-bar');
    const boxUpload = document.querySelector('#box-upload');
    const elementsToHide = uploadContainer.querySelectorAll('.d-hide');

    elementsToHide.forEach(element => {
        element.style.display = 'none';
    });

    progressBox.style.display = 'block';

    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];

        if (boxUpload) {
            boxUpload.style.display = 'none';
        }

        await simulateProcessing(progress => {
            // Update progress bar and text
            document.querySelector('.progress-bar').style.width = progress + '%';
            progressText.innerText = progress + '%';

            // Update box upload progress bar
            if (boxUploadProgressBar) {
                boxUploadProgressBar.style.width = progress + '%';
            }
        });

        // Display the result after processing
        resultSection.style.display = 'flex';
        processedImage.src = document.getElementById('avatarPreview').src;

        const selectedDocument = selectDocument.value;
        const rec = new Tesseract.TesseractWorker();
        const tbDonthuoc = document.querySelector('.tabledonthuoc');
    const tableCancuoc = document.querySelector('.tablecancuoc');
    const tablegplx = document.querySelector('.tablegplx');
    const tablegpoto = document.querySelector('.tablegpoto');
    const tablecndn = document.querySelector('.tablecndn');
    const tbText = document.querySelector('.tabletext');
    const progressBox = document.getElementById('uploadProgressBox');
    
        switch (selectedDocument) {
            case 'anh':
                tbText.style.display = "block";
                btnDownload.style.display = "block";

                processAnhDocument(file, rec);
                document.querySelector('.btn-upload').style.display = 'none';

                break;
            case 'donthuoc':
                tbDonthuoc.style.display = "block";
                btnDownload.style.display = "block";
                
                processDonthuocDocument(file, rec);
                document.querySelector('.btn-upload').style.display = 'none';
                
                break;
            case 'cccd':
                tableCancuoc.style.display = "block";
                btnDownload.style.display = "block";
                processCCCDDocument(file, rec);
                
                document.querySelector('.btn-upload').style.display = 'none';
                break;
                case 'gplx':
                    tablegplx.style.display = "block";
                btnDownload.style.display = "block";
                processGPLXDocument(file, rec);
                
                document.querySelector('.btn-upload').style.display = 'none';
                
                break;
                case 'dkot':
                    tablegpoto.style.display = "block";

                    
                btnDownload.style.display = "block";
                
                processGPOTDocument(file, rec);
                
                document.querySelector('.btn-upload').style.display = 'none';
                break;
                case 'gcndn':
                    tablecndn.style.display = "block";

                    
                btnDownload.style.display = "block";
                processCNDNDocument(file, rec);
                
                document.querySelector('.btn-upload').style.display = 'none';
                
                break;
            default:
                break;
        }
    }
}

function simulateProcessing(progressCallback) {
    return new Promise(resolve => {
        let progress = 0;

        function updateProgress() {
            progress += 1;
            progressCallback(progress);

            if (progress < 100) {
                requestAnimationFrame(updateProgress);
            } else {
                resolve();
            }
        }

        updateProgress();
    });
}


function processAnhDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    rec.recognize(file, 'vie').progress(function (response) {
    document.getElementById('resultSection').style.display = 'none';
   
    progressTextupload.innerHTML = "Đang xử lý";
    uploadProgress.style.display = 'block';
    }).then(async function (data) {
        displayLinesInTable(data.text.split('\n'), infoTableBody);
        progressTextupload.innerHTML = "Đã xử lý xong";
        
        medicationInfoSection.style.display = "none";
                avatarSection.style.display = "block";
        displayResultSection();
    });
}
async function processDonthuocDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    document.getElementById('resultSection').style.display = 'none';
    const elementsToHide = uploadContainer.querySelectorAll('.d-hide');
    elementsToHide.forEach(element => element.style.display = 'none');

    progressTextupload.innerHTML = "Đang xử lý";
    uploadProgress.style.display = 'block';

    try {
        const data = await rec.recognize(file, 'vie');
        progressTextupload.innerHTML = "Đã xử lý xong";
        avatarSection.style.display = "none";
        
        const lines = data.text.split('\n');
        displayLinesInTable(lines, medicationTableBody);
        medicationInfoSection.style.display = "block";
        
        displayResultSection();
    } catch (error) {
        console.error("Error during document processing:", error);
        // Xử lý lỗi nếu cần thiết
    }
}

async function processCCCDDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    rec.recognize(file, 'vie').progress(function (response) {
        document.getElementById('resultSection').style.display = 'none';

        progressTextupload.innerHTML = "Đang xử lý";
        uploadProgress.style.display = 'block';
    }).then(async function (data) {
        displayLinesInTable(data.text.split('\n'), cccdTableBody);
        progressTextupload.innerHTML = "Đã xử lý xong";
        medicationInfoSection.style.display = "none";
        avatarSection.style.display = "block";
        displayResultSection();
    });
}
function processGPLXDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    rec.recognize(file, 'vie').progress(function (response) {
        document.getElementById('resultSection').style.display = 'none';

        progressTextupload.innerHTML = "Đang xử lý";
        uploadProgress.style.display = 'block';
    }).then(async function (data) {
        displayLinesInTable(data.text.split('\n'), gplxTableBody);
        progressTextupload.innerHTML = "Đã xử lý xong";
        medicationInfoSection.style.display = "none";
        avatarSection.style.display = "block";
        displayResultSection();
    });
}
function processGPOTDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    rec.recognize(file, 'vie').progress(function (response) {
        document.getElementById('resultSection').style.display = 'none';

        progressTextupload.innerHTML = "Đang xử lý";
        uploadProgress.style.display = 'block';
    }).then(async function (data) {
        displayLinesInTable(data.text.split('\n'), gpotTableBody);
        progressTextupload.innerHTML = "Đã xử lý xong";
        medicationInfoSection.style.display = "none";
        avatarSection.style.display = "block";
        displayResultSection();
    });
}
function processCNDNDocument(file, rec) {
    const progressTextupload = document.querySelector('.progressTextupload');

    rec.recognize(file, 'vie').progress(function (response) {
        document.getElementById('resultSection').style.display = 'none';

        progressTextupload.innerHTML = "Đang xử lý";
        uploadProgress.style.display = 'block';
    }).then(async function (data) {
        displayLinesInTable(data.text.split('\n'), cndnTableBody);
        progressTextupload.innerHTML = "Đã xử lý xong";
        medicationInfoSection.style.display = "none";
        avatarSection.style.display = "block";
        displayResultSection();
    });
}


function displayLinesInTable(lines, tableBody, extractTextFunction) {
    tableBody.innerHTML = '';
    lines.forEach((line, index) => {
        const extractedText = extractTextFunction ? extractTextFunction(line) : line;

        const row = document.createElement('tr');
        row.innerHTML = `<td>${index + 1}</td><td>${extractedText}</td>`;
        tableBody.appendChild(row);
    });
}

function displayResultSection() {
    const processedImage = document.getElementById('processedImage');
    processedImage.src = document.getElementById('avatarPreview').src;
    document.getElementById('resultSection').style.display = 'block';
    document.getElementById('uploadContainer').style.display = 'none';
    document.querySelector('.other-sl').style.display = 'block';
}


</script>
