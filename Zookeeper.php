<?php

/**
 * Zookeeper class.
 *
 * https://secure.php.net/manual/en/class.zookeeper.php
 * https://github.com/andreiz/php-zookeeper/blob/master/zookeeper-api.php
 */

class Zookeeper {

    //ZooKeeper Permissions
    const PERM_READ = 1 ;
    const PERM_WRITE = 2 ;
    const PERM_CREATE = 4 ;
    const PERM_DELETE = 8 ;
    const PERM_ADMIN = 16 ;
    const PERM_ALL = 31 ;

    //ZooKeeper Log Levels
    const LOG_LEVEL_ERROR = 1 ;
    const LOG_LEVEL_WARN = 2 ;
    const LOG_LEVEL_INFO = 3 ;
    const LOG_LEVEL_DEBUG = 4 ;

    //ZooKeeper States
    const EXPIRED_SESSION_STATE = -112 ;
    const AUTH_FAILED_STATE = -113 ;
    const CONNECTING_STATE = 1 ;
    const ASSOCIATING_STATE = 2 ;
    const CONNECTED_STATE = 3 ;
    const READONLY_STATE = 5 ;
    const NOTCONNECTED_STATE = 999 ;

    //flags
    const EPHEMERAL = 1;
    const SEQUENCE  = 2;


    const CREATED_EVENT         = 1;
    const DELETED_EVENT         = 2;
    const CHANGED_EVENT         = 3;
    const CHILD_EVENT           = 4;
    const SESSION_EVENT         = -1;
    const NOTWATCHING_EVENT     = -2;

    const SYSTEMERROR          = -1;
    const RUNTIMEINCONSISTENCY = -2;
    const DATAINCONSISTENCY    = -3;
    const CONNECTIONLOSS       = -4;
    const MARSHALLINGERROR     = -5;
    const UNIMPLEMENTED        = -6;
    const OPERATIONTIMEOUT     = -7;
    const BADARGUMENTS         = -8;
    const INVALIDSTATE         = -9;

    const OK         = 0;
    const APIERROR   = -100;
    const NONODE     = -101;
    const NOAUTH     = -102;
    const BADVERSION = -103;
    const NOCHILDRENFOREPHEMERALS = -108;
    const NODEEXISTS = -110;
    const NOTEMPTY   = -111;
    const SESSIONEXPIRED  = -112;
    const INVALIDCALLBACK = -113;
    const INVALIDACL      = -114;
    const AUTHFAILED      = -115;
    const CLOSING         = -116;
    const NOTHING         = -117;
    const SESSIONMOVED    = -118;


    /* if the host is provided, attempt to connect. */

    /**
     * Zookeeper constructor.
     *
     * @param string $host
     * @param callable $watcher_cb
     * @param int $recv_timeout
     */
    public function __construct( $host = '', $watcher_cb = null, $recv_timeout = 10000) {}

    /**
     * @param string $host
     * @param callable $watcher_cb
     * @param int $recv_timeout
     */
    public function connect( $host, $watcher_cb = null, $recv_timeout = 10000) {}

    /**
     * @param string $path
     * @param string $value
     * @param array $acls
     * @param int $flags
     * @return string
     */
    public function create( $path, $value, $acls, $flags = null ) {}

    /**
     * @param string $path
     * @param int $version
     * @return bool
     */
    public function delete( $path, $version = -1 ) {}

    /**
     * @param string $path
     * @param string $value
     * @param int $version
     * @param array $stat
     * @return bool
     */
    public function set( $path, $value, $version = -1, &$stat = null ) {}

    /**
     * @param $path
     * @param callable $watcher_cb
     * @param array $stat
     * @param int $max_size
     * @return string
     */
    public function get( $path, $watcher_cb = null, &$stat = null, $max_size = 0) {}

    /**
     * @param string $path
     * @param callable $watcher_cb
     * @return array
     */
    public function getChildren( $path, $watcher_cb = null ) {}

    /**
     * @param string $path
     * @param callable $watcher_cb
     * @return bool
     */
    public function exists( $path, $watcher_cb = null ) {}

    /**
     * @param string $path
     * @return array
     */
    public function getAcl( $path ) {}

    /**
     * @param string $path
     * @param int $version
     * @param array $acls
     * @return bool
     */
    public function setAcl( $path, $version, $acls ) {}

    /**
     * @return int
     */
    public function getClientId( ) {}

    /**
     * @param callable $watcher_cb
     * @return bool
     */
    public function setWatcher( $watcher_cb ) {}

    /**
     * @return int
     */
    public function getState( ) {}

    /**
     * @return int
     */
    public function getRecvTimeout( ) {}

    /**
     * @param string $scheme
     * @param string $cert
     * @param callable $completion_cb
     * @return bool
     */
    public function addAuth( $scheme, $cert, $completion_cb = null ) {}

    /**
     * @return bool
     */
    public function isRecoverable( ) {}

    /**
     * @param resource $file
     * @return bool
     */
    public function setLogStream( $file ) {} // TODO: might be able to set a stream like php://stderr or something

    public function getResultMessage( ) {}


    // static methods

    /**
     * @param int $level
     * @return bool
     */
    static public function setDebugLevel( $level ) {}

    /**
     * @param bool $trueOrFalse
     * @return bool
     */
    static public function setDeterministicConnOrder( $trueOrFalse ) {}

}
