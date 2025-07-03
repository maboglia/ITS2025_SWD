package com.maboglia.repos;

import org.springframework.data.jpa.repository.JpaRepository;

import com.maboglia.entities.Moto;

public interface MotoRepo extends JpaRepository<Moto, Integer> {

}
