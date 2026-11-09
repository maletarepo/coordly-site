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
| Secret | `FTP_HOST` | Host FTP (hPanel > Arquivos > Contas FTP) |
| Secret | `FTP_USER` | Usuário FTP |
| Secret | `FTP_PASSWORD` | Senha FTP |
| Variable | `FTP_SITE_ROOT` | Caminho, a partir da raiz do FTP, até o `public_html` do site, terminando em `/`. Deixe vazio se o FTP já abre direto no `public_html`. |
| Variable | `FTP_PROTOCOL` | Opcional: `ftps` (padrão) ou `ftp` se o FTPS falhar |

**Settings > Environments > `production`**: se o seu plano do GitHub permitir, adicione *Required reviewers* para que cada deploy espere a sua aprovação.

**Settings > Branches**: proteja a `main` exigindo PR e o check "Verificar sintaxe PHP".

## Observações

- `hostinger-auto-updates.php` (mu-plugin da Hostinger) existe só no servidor. Ele não é versionado e o deploy nunca o apaga.
- O deploy guarda um `.ftp-deploy-sync-state.json` em cada pasta de destino no servidor. Não apague esse arquivo, senão o próximo deploy reenvia tudo.
- Fim de linha: LF (`.gitattributes`), igual ao servidor.
