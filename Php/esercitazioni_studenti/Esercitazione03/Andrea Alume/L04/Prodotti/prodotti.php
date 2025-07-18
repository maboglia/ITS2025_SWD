<?php

declare(strict_types=1);

class Prodotti {
    private array $lista = [];
    

    public function add(Prodotto $prodotto): void {
        $this->lista[] = $prodotto;
        array_push($this->lista, $prodotto);
    }

    public function getLista(): array {
        return $this->lista;
    }
    public function getProdottoById(int $id) {
        foreach($this-> lista as $prodotto) {
                    if ($prodotto->id === $id) {
                        return $prodotto;
                    }
                }
                return null;
            }
        }