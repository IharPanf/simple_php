<?php
/**
 * Простой пример реализации паттерна Singleton
 */
class SingletonTest
{
    /**
     * Переменная, для хранения экземпляра класса	
     * @var SingletonTest
     */
    protected static $_instance;
 
    /**
     * Закрываем доступ к конструктору вне класса.
     */
    private function __construct(){
    }
 
    /**
     * Закрываем доступ к функции вне класса.
     */
    private function __clone(){
    }
    /**
     * Статическая функция, которая возвращает
     * экземпляр класса или создает новый при
     * необходимости
     *
     * @return SingletonTest
     */
    public static function getInstance() {
        // проверяем актуальность экземпляра
        if (self::$_instance === null ) {
            // создаем новый экземпляр
            self::$_instance = new self();
        }
        // возвращаем созданный или существующий экземпляр
        return self::$_instance;
    }
}