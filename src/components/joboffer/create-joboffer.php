<?php
include_once("../../../layouts/head.php");
include "../dashboard/header.dash.php";
?>
<style>
    .return-btn {
        position: fixed;
        top: 85px;
        right: 500px;
    }

    .return-btn a {
        font-size: 30px;
        padding: 8px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1000;
        border: 1px solid rgba(0, 0, 0, 0.2);
    }

    .return-btn a:hover {
        background: #6A64F1;
        color: #fff;
    }

    .return-btn a ion-icon {
        font-size: 20px;
        z-index: 1000;
    }
</style>

<div class="h-full w-full absolute">

    <div class="container mx-auto px-6 mt-[80px]">
        <div class="flex items-center justify-center p-6">
            <!-- Author: FormBold Team -->
            <div class="mx-auto w-full max-w-[850px] bg-white relative ">
                <div class="return-btn">
                    <a href="joboffer-start.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
                </div>
                <h2 class=" text-center font-medium tracking-tight text-gray-900 text-3xl mb-[40px]">Crear nueva oferta laboral</h2>
                <form>
                    <div class="mb-5">
                        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                            Titulo
                        </label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">
                            Descripción
                        </label>
                        <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Fecha inicio
                                </label>
                                <input type="date" name="date" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Fecha fin
                                </label>
                                <input type="date" name="time" id="time" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Ubicación
                                </label>
                                <input type="text" name="date" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Salario
                                </label>
                                <input type="number" name="time" id="time" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tipo
                                </label>
                                <div class="relative">
                                    <select id="country" name="country" autocomplete="country-name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 pr-10 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md appearance-none">
                                        <option>Presencial</option>
                                        <option>Remoto</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="h-5 w-5 text-[#6B7280]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9.293 5.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 7.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Estado
                                </label>
                                <div class="relative">
                                    <select id="country" name="country" autocomplete="country-name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 pr-10 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md appearance-none">
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none ">
                                        <svg class="h-5 w-5 text-[#6B7280]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9.293 5.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 7.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Limite postulaciones
                                </label>
                                <input type="number" name="date" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Categoria
                                </label>
                                <div class="relative">
                                    <select id="country" name="country" autocomplete="country-name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 pr-10 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md appearance-none">
                                        <option>Categorias</option>
                                        <option>Tenologia</option>
                                        <option>Minas</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="h-5 w-5 text-[#6B7280]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9.293 5.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 7.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none mb-[100px]">
                            Crear oferta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>