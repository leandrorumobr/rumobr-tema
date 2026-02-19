# Changelog

Todas as mudanças notáveis neste projeto serão documentadas neste arquivo.

O formato é baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.0.0/),
e este projeto adere ao [Versionamento Semântico](https://semver.org/lang/pt-BR/).

## [1.0.0] - 2024-02-19

### Added
- Lançamento inicial do pacote `nunes/rumobr-tema`
- Service Provider para integração com Laravel
- Comando Artisan `tema-rumo:publish` para publicar componentes Vue
- Sistema de publicação de assets (componentes, páginas e CSS)

#### Componentes UI Base
- Alert (Alert, AlertDescription, AlertTitle)
- Avatar (Avatar, AvatarFallback, AvatarImage)
- Badge
- Breadcrumb (completo com BreadcrumbItem, BreadcrumbLink, BreadcrumbPage, etc.)
- Button
- Card (Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle)
- Checkbox
- Collapsible
- Dialog (completo com DialogContent, DialogDescription, DialogFooter, DialogHeader, DialogTitle, DialogTrigger)
- Dropdown Menu (completo com múltiplos subcomponentes)
- Input
- Input OTP
- Label
- Navigation Menu (completo com NavigationMenuItem, NavigationMenuList, etc.)
- Separator
- Sheet (completo com SheetContent, SheetHeader, SheetTitle, SheetTrigger, etc.)
- Sidebar (sistema completo de sidebar com 24+ componentes)
- Skeleton
- Spinner
- Toggle Group
- Tooltip (completo com TooltipContent, TooltipProvider, TooltipTrigger)

#### Componentes de Layout
- AppShell
- AppHeader
- AppSidebar
- AppSidebarHeader
- AppContent
- AppLogo
- AppLogoIcon
- Breadcrumbs
- Heading

#### Componentes de Navegação
- NavMain
- NavFooter
- NavUser
- UserMenuContent
- UserInfo

#### Componentes Funcionais
- Modal
- AlertError
- AlertGeral
- InputError
- TextLink
- DeleteUser
- TwoFactorSetupModal
- TwoFactorRecoveryCodes
- AppearanceTabs
- PlaceholderPattern

#### Páginas de Exemplo
- AlertasToast
- Botoes
- Cores
- Inputs
- Modal

#### Assets
- CSS base (`app.css`)
- Sistema de publicação de assets via Service Provider
- Suporte para múltiplos grupos de publicação (components, pages, css)

### Changed
- Nada

### Deprecated
- Nada

### Removed
- Nada

### Fixed
- Nada

### Security
- Nada
