Rails.application.routes.draw do
  resources :categoria
  resources :detalles
  get 'welcome/index'

    root 'welcome#index'
end
