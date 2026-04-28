<?php
// Nomenclatura: Snake Case
// Salvar alterações: Ctrl + S

// VARIAVEIS:
$escolha = "";
$banco_usuario = readline("DIGITE SEU E-MAIL: ");
$banco_senha = readline("DIGITE SUA SENHA: ");
if ($banco_usuario == "Senai@gmail.com" && $banco_senha == "123") {
    echo "Acesso Liberado!\n";
    while ($escolha != 0) {
        echo "BEM VINDO AO PSI ( Política de Segurança da Informação ) \n";
        echo "-------------------------------------------------------------\n";
        echo "ESCOLHA UMA OPÇÃO \n";
        echo "1 - Objetivos da PSI\n";
        echo "2 - Oque é Escopo da política\n";
        echo "3 - Responsabilidades\n";
        echo "4 - Boas práticas de segurança\n";
        echo "5 - Consequências do descumprimento\n";
        echo "6 - Dicas sobre segurança!\n";
        echo "0 - Sair\n";


        $escolha = readline("Escolha uma opção: ");

        switch ($escolha) {
            case 1:
                echo "\n Objetivos da PSI?\n";
                echo "--------------------------\n";
                echo "- Proteger a informação\n";
                echo "- Garantir a confidencialidade: (acesso apenas por pessoas autorizadas)\n";
                echo "- Integridade:    (exatidão da informação)\n";
                echo "- Disponibilidade (acesso quando necessário).\n";
                echo "- Reduzir Riscos: (Minimizar ataques cibernéticos)\n";
                echo "- Proteção Legal: (Serve como documento oficial em auditorias ou casos trabalhistas/cíveis)\n";
                echo "- Padronização:   (Define o comportamento esperado de todos os funcionários ao lidar com dados)\n";
                break;
            case 2:
                echo "\n Oque é Escopo da política?\n";
                echo "--------------------------\n";
                echo "- Define as diretrizes, regras, responsabilidades e limites para o uso eficiente.\n";
                echo "\n Principais Elementos \n";
                echo "--------------------------\n";
                echo "- Segurança da Informação: ( Estabelece regras para proteger dados contra acessos não autorizados)\n ";
                echo "- Uso Aceitável de Ativos: (Define normas de conduta para o uso de equipamentos)).\n";
                echo "- Gestão de Acessos:       (Regula quem pode acessar quais sistemas e informações)\n";
                echo "- Gestão de Ativos de TI:  (Abrange o ciclo de vida dos equipamentos e softwares)\n";
                echo "- Conformidade Legal :     (Garante que a empresa siga normas técnicas e legislações)\n";
                break;

            case 3:
                echo "\n Responsabilidades: \n";
                echo "--------------------------\n";
                echo "- Alta Administração: (Aprovar a política, designar a área de segurança e apoiar a implantação de soluções.)\n";
                echo "- Área de Segurança da Informação: (Planejar, definir e aplicar o modelo de segurança e as normas técnicas.)\n";
                echo "- Usuários/Colaboradores: (Conhecer e cumprir a PSI, proteger as informações sob sua custódia e relatar incidentes.)\n";
                break;

            case 4:
                echo "\n Boas práticas de segurança \n";
                echo "--------------------------\n";
                echo "- Gestão de Acessos: (Uso de senhas seguras autenticação forte e controle de acesso baseado em necessidades )\n";
                echo "- Conscientização: (Realização de treinamentos regulares e campanhas para funcionários sobre segurança cibernética, phishing e uso seguro da internet.)\n";
                echo "- Proteção Física e Lógica: (Uso de antivírus, backup, criptografia e controle físico de acesso a áreas sensíveis.)\n";
                break;

            case 5:
                echo "\n Consequências do descumprimento\n";
                echo "--------------------------\n";
                echo "- Medidas Administrativas: (Advertências formais verbais ou escritas e suspensões.)\n";
                echo "- Demissão: (Demissão do contrato de trabalho, inclusive por justa causa, dependendo da gravidade da violação.)\n";
                echo "- Ações Legais: (Processos civis ou criminais, caso o ato seja ilícito ou cause prejuízos à organização.)\n";

                break;
            case 6:
                echo "\n Dicas sobre segurança! \n";
                echo "--------------------------\n";
                echo "- Senhas Seguras: Utilize senhas fortes (caracteres especiais, números, letras maiúsculas/minúsculas) e troque-as periodicamente.\n";
                echo "- Autenticação de Dois Fatores (2FA): Ative 2FA sempre que disponível para adicionar uma camada extra de proteção.\n";
                echo "- Cuidado com Phishing: Fique atento a e-mails, links e anexos desconhecidos que podem ser tentativas de roubo de dados.\n";
                echo "- Gestão de Acessos: Implemente a gestão de acesso privilegiado e controle de acesso, garantindo que usuários acessem apenas o necessário para suas funções.\n";
                break;
            case 0:
                echo "Programa Finalizado !!...";
                break;
            default:
                echo "Opção inválida! Tente novamente.\n";
                break;
        }
    }
} else {
    echo "E-mail ou senha incorretos!\n";
}
