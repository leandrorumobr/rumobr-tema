# Rumo BR Tema

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Componentes Vue 3 e CSS para projetos Laravel - Tema Rumo BR. Uma biblioteca completa de componentes UI baseados em shadcn/ui, prontos para uso em aplicações Laravel com Vue 3.

## 📋 Requisitos

- PHP 8.1 ou superior
- Laravel 10.0 ou superior (suporta Laravel 11)
- Vue 3.3 ou superior
- Node.js e NPM (para build dos assets)

## 🚀 Instalação

### 1. Instalar via Composer

```bash
composer require nunes/rumobr-tema
```

### 2. Publicar Componentes e Assets

```bash
php artisan rumobr-tema:publish
```

Este comando publica:
- Componentes Vue em `resources/js/components/`
- Páginas de exemplo em `resources/js/pages/`
- CSS em `resources/css/`

Para sobrescrever arquivos existentes, use a flag `--force`:

```bash
php artisan rumobr-tema:publish --force
```

### 3. Compilar Assets

```bash
npm run build
```

ou em modo de desenvolvimento:

```bash
npm run dev
```

## 📦 Componentes Disponíveis

### Componentes UI Base

O pacote inclui uma biblioteca completa de componentes UI baseados em shadcn/ui:

#### Navegação e Layout
- **Alert** - Alertas e notificações
- **Avatar** - Avatar de usuário
- **Badge** - Badges e etiquetas
- **Breadcrumb** - Navegação breadcrumb completa
- **Button** - Botões com múltiplas variantes
- **Card** - Cards com header, content e footer
- **Dialog** - Modais e diálogos
- **Dropdown Menu** - Menus dropdown
- **Navigation Menu** - Menu de navegação
- **Separator** - Separadores visuais
- **Sheet** - Painéis laterais (drawer)
- **Sidebar** - Sistema completo de sidebar
- **Tooltip** - Tooltips informativos

#### Formulários
- **Checkbox** - Checkboxes
- **Input** - Campos de entrada
- **Input OTP** - Input para códigos OTP
- **Label** - Labels para formulários
- **Toggle Group** - Grupo de toggles

#### Feedback e Utilitários
- **Collapsible** - Elementos colapsáveis
- **Skeleton** - Placeholders de carregamento
- **Spinner** - Indicadores de carregamento

### Componentes de Layout

- **AppShell** - Shell principal da aplicação
- **AppHeader** - Cabeçalho da aplicação
- **AppSidebar** - Sidebar da aplicação
- **AppContent** - Container de conteúdo
- **AppLogo** - Logo da aplicação
- **AppLogoIcon** - Ícone do logo
- **Breadcrumbs** - Componente de breadcrumbs
- **Heading** - Títulos e cabeçalhos

### Componentes de Navegação

- **NavMain** - Navegação principal
- **NavFooter** - Rodapé de navegação
- **NavUser** - Menu do usuário
- **UserMenuContent** - Conteúdo do menu do usuário
- **UserInfo** - Informações do usuário

### Componentes Funcionais

- **Modal** - Modal customizado
- **AlertError** - Alertas de erro
- **AlertGeral** - Alertas gerais
- **InputError** - Mensagens de erro para inputs
- **TextLink** - Links estilizados
- **DeleteUser** - Componente para deletar usuário
- **TwoFactorSetupModal** - Modal de configuração 2FA
- **TwoFactorRecoveryCodes** - Códigos de recuperação 2FA
- **AppearanceTabs** - Tabs de aparência (tema claro/escuro)
- **PlaceholderPattern** - Padrões de placeholder

## 💻 Uso

### Importar Componentes

Após publicar os componentes, você pode importá-los em seu `app.js` ou `resources/js/app.js`:

```javascript
import { createApp } from 'vue';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { Dialog, DialogContent, DialogHeader, DialogTitle } from '@/components/ui/dialog';
import AppShell from '@/components/AppShell.vue';
import AppHeader from '@/components/AppHeader.vue';
import AppSidebar from '@/components/AppSidebar.vue';

// Importar CSS
import '@/css/app.css';

const app = createApp({});

// Registrar componentes globalmente (opcional)
app.component('Button', Button);
app.component('Card', Card);
app.component('CardContent', CardContent);
app.component('CardHeader', CardHeader);
app.component('CardTitle', CardTitle);

app.mount('#app');
```

### Exemplo de Uso - Button

```vue
<template>
  <Button variant="default" size="lg">
    Clique aqui
  </Button>
  
  <Button variant="destructive" size="sm">
    Deletar
  </Button>
  
  <Button variant="outline" :disabled="isLoading">
    Salvar
  </Button>
</template>

<script setup>
import { Button } from '@/components/ui/button';
</script>
```

### Exemplo de Uso - Card

```vue
<template>
  <Card>
    <CardHeader>
      <CardTitle>Título do Card</CardTitle>
    </CardHeader>
    <CardContent>
      <p>Conteúdo do card aqui...</p>
    </CardContent>
  </Card>
</template>

<script setup>
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
</script>
```

### Exemplo de Uso - Dialog (Modal)

```vue
<template>
  <Dialog v-model:open="isOpen">
    <DialogContent>
      <DialogHeader>
        <DialogTitle>Título do Modal</DialogTitle>
      </DialogHeader>
      <p>Conteúdo do modal aqui...</p>
    </DialogContent>
  </Dialog>
</template>

<script setup>
import { ref } from 'vue';
import { Dialog, DialogContent, DialogHeader, DialogTitle } from '@/components/ui/dialog';

const isOpen = ref(false);
</script>
```

### Exemplo de Uso - Layout Completo

```vue
<template>
  <AppShell>
    <AppSidebar />
    <div class="flex flex-col flex-1">
      <AppHeader :breadcrumbs="breadcrumbs" />
      <AppContent>
        <!-- Seu conteúdo aqui -->
      </AppContent>
    </div>
  </AppShell>
</template>

<script setup>
import AppShell from '@/components/AppShell.vue';
import AppSidebar from '@/components/AppSidebar.vue';
import AppHeader from '@/components/AppHeader.vue';
import AppContent from '@/components/AppContent.vue';

const breadcrumbs = [
  { title: 'Home', href: '/' },
  { title: 'Dashboard', href: '/dashboard' },
];
</script>
```

## 📁 Estrutura de Arquivos Publicados

Após executar `php artisan rumobr-tema:publish`, os seguintes arquivos serão criados:

```
resources/
├── js/
│   ├── components/
│   │   ├── ui/              # Componentes UI base
│   │   ├── AppShell.vue
│   │   ├── AppHeader.vue
│   │   ├── AppSidebar.vue
│   │   └── ...              # Outros componentes
│   └── pages/
│       └── padrao/          # Páginas de exemplo
│           ├── AlertasToast.vue
│           ├── Botoes.vue
│           ├── Cores.vue
│           ├── Inputs.vue
│           └── Modal.vue
└── css/
    └── app.css              # Estilos CSS
```

## 🎨 Páginas de Exemplo

O pacote inclui páginas de exemplo que demonstram o uso dos componentes:

- **AlertasToast.vue** - Exemplos de alertas e toasts
- **Botoes.vue** - Exemplos de botões e variantes
- **Cores.vue** - Paleta de cores do tema
- **Inputs.vue** - Exemplos de campos de formulário
- **Modal.vue** - Exemplos de modais e diálogos

## 🔧 Configuração

O Service Provider é registrado automaticamente pelo Laravel. Não é necessária configuração adicional.

## 📝 Comandos Disponíveis

### Publicar Assets

```bash
php artisan rumobr-tema:publish
```

Publica todos os componentes, páginas e CSS.

### Publicar com Força

```bash
php artisan rumobr-tema:publish --force
```

Sobrescreve arquivos existentes.

## 🧪 Testes

```bash
composer test
```

ou

```bash
phpunit
```

## 🎯 Suporte

- **Issues**: [GitHub Issues](https://github.com/leandrorumobr/rumobr-tema/issues)
- **Source**: [GitHub Repository](https://github.com/leandrorumobr/rumobr-tema)
- **Email**: leandro.nunes@rumobr.com

## 👤 Autor

**Leandro Nunes**

- GitHub: [@leandrorumobr](https://github.com/leandrorumobr)
- Email: leandro.nunes@rumobr.com

## 📄 Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## 🙏 Agradecimentos

Este projeto utiliza componentes baseados em [shadcn/ui](https://ui.shadcn.com/) e [Reka UI](https://reka-ui.com/).

---

**Desenvolvido com ❤️ pela equipe Rumo BR**
