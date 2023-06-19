<?php
class HookManager
{
    private static $hooks = array();

    public static function addHook($name, $callback)
    {
        self::$hooks[$name][] = $callback;
    }

    public static function invokeHook($name, $args = array())
    {
        if (isset(self::$hooks[$name])) {
            foreach (self::$hooks[$name] as $hook) {
                call_user_func_array($hook, $args);
            }
        }
    }

    public static function debug()
    {
        print_r(self::$hooks);
    }
}
