# coordly.co — site WordPress

Este repositório guarda **só o código próprio** do site:

- `wp-content/themes/CoordlyWPTheme/`: tema
- `wp-content/mu-plugins/`: mu-plugins da Coordly (`coordly-geo-lang.php`)

WordPress core, plugins de terceiros, uploads, banco de dados e `wp-config.php` **não** entram no Git (veja `.gitignore`).
Conteúdo de páginas fica no banco: o backup dele são os backups da Hostinger e os dumps em `../../backups/` (fora do repositório).

## Fluxo de trabalho

1. Crie uma branch, faça as alterações e teste localmente (Laragon, `http://coordly.test`).
2. Abra um Pull Request para `main`. O CI roda `php -l` em todos os PHPs.
3. Ao fazer merge na `main`, o GitHub Actions publica por FTP **só os arquivos alterados** do tema e dos mu-plugins.
4. Depois do deploy, limpe o cache: hPanel > Avançado > Gerenciador de cache (ou LiteSpeed no wp-admin).

Deploy manual: aba **Actions** > CI/CD > *Run workflow*.

## Configuração no GitHub (uma vez)

**Settings > Secrets and variables > Actions**

| Tipo | Nome | Valor |
|---|---|---|
| Secret | `FTP_HOST` | Nome do servidor `srvNNNN.hstgr.io` (hPanel > Plano > Detalhes do servidor: server1549 → `srv1549.hstgr.io`). Não use o IP: o certificado FTPS é `*.hstgr.io` e só valida com esse nome. |
| Secret | `FTP_USER` | Usuário da **conta FTP principal** (`u443637790`, hPanel > Contas FTP > Acesso FTP). Não use `u443637790.maleta78wp1`: ela fica presa na cópia aninhada `public_html/public_html`, que não é a pasta servida. |
| Secret | `FTP_PASSWORD` | Senha FTP |
| Variable | `FTP_SITE_ROOT` | Opcional. Caminho, a partir do login FTP, até o `public_html`, terminando em `/`. Sem ela, o deploy testa a raiz do login, `public_html/` e `domains/coordly.co/public_html/` e usa o caminho onde o tema já existe. |
| Variable | `SITE_URL` | Opcional: endereço público do site (padrão `https://coordly.co`), usado para confirmar que a pasta do FTP é a que o site serve |
| Variable | `FTP_PROTOCOL` | Opcional: `ftps` (padrão) ou `ftp` se o FTPS falhar |

**Settings > Environments > `production`**: se o seu plano do GitHub permitir, adicione *Required reviewers* para que cada deploy espere a sua aprovação.

**Settings > Branches**: proteja a `main` exigindo PR e o check "Verificar sintaxe PHP".

## Observações

- `hostinger-auto-updates.php` (mu-plugin da Hostinger) existe só no servidor. Ele não é versionado e o deploy nunca o apaga.
- Antes de publicar, o deploy grava um arquivo de teste na pasta do tema via FTP e o busca por HTTPS no site. Só publica se o site servir esse arquivo, o que evita enviar para uma cópia que não está no ar.
- O deploy guarda o último commit publicado em `wp-content/themes/CoordlyWPTheme/.deploy-rev` no servidor e envia só o que mudou no Git desde então. Se esse arquivo sumir, o próximo deploy reenvia tudo (sem problema).
- O envio usa curl com FTPS e certificado validado. A ação FTP-Deploy-Action não funciona com o FTPS da Hostinger (ECONNRESET no canal de dados).
- Fim de linha: LF (`.gitattributes`), igual ao servidor.
