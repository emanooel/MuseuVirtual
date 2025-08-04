document.addEventListener("DOMContentLoaded", () => {
    // Função para mostrar ou esconder grandes níveis (eons, eras)
    function hideAllNiveisExcept(showIds = []) {
        const niveis = document.querySelectorAll(".nivel");
        niveis.forEach(div => {
            if (showIds.includes(div.id) || div.id === "eons") {
                div.classList.remove("hidden");
            } else {
                div.classList.add("hidden");
            }
        });
    }

    // Clique em eon: modo substitutivo, mostra eons + eras do eon
    document.querySelectorAll(".eon").forEach(eon => {
        eon.addEventListener("click", () => {
            const eonTarget = eon.id;
            if (document.getElementById(eonTarget)) {
                hideAllNiveisExcept(["eons", eonTarget]);
                // Esconde todos períodos e achou
                document.querySelectorAll('.nivel[id^="era-"]').forEach(div => div.classList.add("hidden"));
                document.getElementById("achou").classList.add("hidden");
            } else {
                hideAllNiveisExcept(["eons", "achou"]);
            }
        });
    });

    // Clique em era: mostra os períodos dessa era só, mantém tudo acima visível
    document.querySelectorAll(".era").forEach(era => {
        era.addEventListener("click", () => {
            const periodoContainerId = "era-" + era.id;

            // Esconde todos os períodos primeiro
            document.querySelectorAll('.nivel[id^="era-"]').forEach(div => {
                div.classList.add("hidden");
            });

            if (document.getElementById(periodoContainerId)) {
                document.getElementById(periodoContainerId).classList.remove("hidden");
                document.getElementById("achou").classList.add("hidden");
            } else {
                document.getElementById("achou").classList.remove("hidden");
            }
        });
    });

    // Clique em período: mostra a mensagem final "achou"
    document.querySelectorAll(".periodo").forEach(periodo => {
        periodo.addEventListener("click", () => {
            document.getElementById("achou").classList.remove("hidden");
        });
    });
});
