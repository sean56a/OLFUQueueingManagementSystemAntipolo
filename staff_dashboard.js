/* =========== TOGGLE NAVIGATION BAR =========== */
const navMenu = document.getElementById('navMenu');
const toggleBtn = document.getElementById('toggleBtn');

function myMenuFunction() {
    if (!navMenu) return;
    if (navMenu.className === 'nav-menu') {
        navMenu.className += ' responsive';
        toggleBtn.className = 'uil uil-multiply';
    } else {
        navMenu.className = 'nav-menu';
        toggleBtn.className = 'uil uil-bars';
    }
}

function closeMenu() {
    if (!navMenu) return;
    navMenu.className = 'nav-menu';
}

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', closeMenu);
});

/* =========== CHANGE HEADER ON SCROLL =========== */
window.addEventListener('scroll', headerShadow);
window.addEventListener('load', headerShadow);

function headerShadow() {
    const navHeader = document.getElementById('header');
    if (!navHeader) return;

    if (window.scrollY > 50) {
        navHeader.style.boxShadow = '0 4px 10px #000000BB';
        navHeader.style.height = '70px';
        navHeader.style.lineHeight = '70px';
        navHeader.style.background = '#cfcfcf';
        navHeader.style.backdropFilter = 'blur(8px)';
    } else {
        navHeader.style.boxShadow = 'none';
        navHeader.style.height = '90px';
        navHeader.style.lineHeight = '90px';
        navHeader.style.background = '#fff';
        navHeader.style.backdropFilter = 'blur(0px)';
    }
}

/* =========== VIEW DETAILS MODAL (Attachments only) =========== */
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("detailsModal");
    if (!modal) return;

    const closeModal = modal.querySelector(".close");
    const attachmentContainer = document.getElementById("attachmentContainer");

    const requestID = document.getElementById("requestID");
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const studentNumber = document.getElementById("studentNumber");
    const section = document.getElementById("section");
    const lastSchoolYear = document.getElementById("lastSchoolYear");
    const lastSemesterAttended = document.getElementById("lastSemesterAttended");
    const documents = document.getElementById("documents");
    const notes = document.getElementById("notes");

    document.querySelectorAll(".viewDetails").forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent scroll jump

            // Populate modal details
            requestID.textContent = button.dataset.requestId || '';
            firstName.textContent = button.dataset.requestFirstName || '';
            lastName.textContent = button.dataset.requestLastName || '';
            studentNumber.textContent = button.dataset.requestStudentNumber || '';
            section.textContent = button.dataset.requestSection || '';
            lastSchoolYear.textContent = button.dataset.requestLastSchoolYear || '';
            lastSemesterAttended.textContent = button.dataset.requestLastSemester || '';
            documents.textContent = button.dataset.requestDocuments || '';
            notes.textContent = button.dataset.requestNotes || '';

            // Clear previous attachments
            attachmentContainer.innerHTML = '';

            // Show attachments if available
            let attachments = [];
            try { attachments = JSON.parse(button.dataset.requestAttachments); } 
            catch (err) { attachments = []; }

            if (attachments.length > 0 && attachments[0] !== "") {
                attachments.forEach(file => {
                    const a = document.createElement("a");
                    a.href = "uploads/" + file;
                    a.target = "_blank";
                    a.textContent = file;
                    a.style.display = "block";
                    attachmentContainer.appendChild(a);
                });
            } else {
                attachmentContainer.textContent = "No attachments.";
            }

            // Show modal
            modal.style.display = "block";
        });
    });

    // Close modal when clicking close button
    closeModal.addEventListener("click", () => modal.style.display = "none");

    // Close modal when clicking outside the modal content
    window.addEventListener("click", (e) => {
        if (e.target === modal) modal.style.display = "none";
    });
});
// ================= GENERATE REPORT HANDLER =================
document.getElementById("generateReportForm").addEventListener("submit", function (e) {
    const selectedDate = document.getElementById("archiveDatePicker").value;
    if (!selectedDate) {
        e.preventDefault();
        alert("Please select a date in the archive first.");
        return;
    }
    document.getElementById("reportDateHidden").value = selectedDate;
});

