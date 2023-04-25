import "./bootstrap";
import.meta.glob(["../images/**"]);

import Alpine from "alpinejs";

window.Alpine = Alpine;

document.addEventListener("alpine:init", () => {
    let countdownInterval = null;
    Alpine.data("onboarding", () => ({
        page: 8,
        next() {
            this.page++;
        },
        prev() {
            this.page--;
        },
        open: false,
        get prev_disabled() {
            return this.page === 1;
        },
        get next_disabled() {
            return this.page === 3;
        },
        games: [
            "Valorant",
            "Minecraft",
            "League",
            "Roblox",
            "Fortnite",
            "Overwatch",
        ],
        musics: [
            "Hip-Hop",
            "Country",
            "Rock",
            "Pop",
            "R&B",
            "K-Pop",
            "Classical",
            "Latin",
            "Metal",
        ],
        hobbies: [
            "Anime",
            "Art",
            "Travel",
            "TikTok",
            "Cooking",
            "Singing",
            "Reading",
        ],
        league_ranks: [
            "Unranked",
            "Iron",
            "Bronze",
            "Silver",
            "Gold",
            "Platinum",
            "Diamond",
            "Master",
            "Grandmaster",
            "Challenger",
        ],
        valorant_ranks: [
            "Unranked",
            "Iron",
            "Bronze",
            "Silver",
            "Gold",
            "Platinum",
            "Diamond",
            "Ascendant",
            "Immortal",
            "Radiant",
        ],
        about: "",

        recording: false,
        audioURL: null,
        mediaRecorder: null,
        timeLeft: 8.0,

        startRecording() {
            navigator.mediaDevices
                .getUserMedia({ audio: true })
                .then((stream) => {
                    this.mediaRecorder = new MediaRecorder(stream);
                    let audioChunks = [];
                    this.mediaRecorder.addEventListener(
                        "dataavailable",
                        (event) => {
                            audioChunks.push(event.data);
                        }
                    );
                    this.mediaRecorder.addEventListener("stop", () => {
                        let audioBlob = new Blob(audioChunks, {
                            type: "audio/ogg; codecs=opus",
                        });
                        this.audioURL = URL.createObjectURL(audioBlob);
                        this.recording = false;
                        this.timeLeft = 8.0;
                        clearInterval(countdownInterval);
                    });
                    this.mediaRecorder.start();
                    this.recording = true;
                    countdownInterval = setInterval(() => {
                        if (this.timeLeft <= 0) {
                            clearInterval(countdownInterval);
                            this.stopRecording();
                        } else {
                            this.timeLeft -= 0.01;
                        }
                    }, 10);
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        stopRecording() {
            this.mediaRecorder.stop();
        },

        playAudio() {
            let audio = new Audio(this.audioURL);
            audio.play();
        },

        buttons: [0, 1, 2, 3, 4, 5],
        images: [],

        uploadImage(index) {
            document.querySelector(`#input-${index}`).click();
        },

        handleFileInput(event, index) {
            let file = event.target.files[0];
            if (file.type.startsWith("image/")) {
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    this.images.splice(index, 1, reader.result);
                };
            }
        },
    }));
});

Alpine.start();
