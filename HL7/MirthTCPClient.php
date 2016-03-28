<?php

class MirthTCPClient
{
    private $socket;
    private $data;
    private $port;
    private $address;

    public function __construct($config=null)
    {
        if ( isset($config->port) ) {
            $this->_setPort($config->port);
        }

        if ( isset($config->address)) {
            $this->_setAddress(($config->address));
        }

        if ( isset($config->data) ) {
            $this->_setData($config->data);
        }

        if ( $this->getAddress() && $this->getPort() ) {
            $this->_setSocket();
        }
    }


    public function write( $data )
    {
 
            $startBlock = chr(0x0B);
            $endBlock = chr(0x1C);
            $return  = chr(0x0D);

#            socket_write($this->getSocket(), $startBlock, strlen($startBlock) );
            $numItems = count($data);
            $i= 0;
            foreach ($data as $value) {
                   
                socket_write($this->getSocket(), $value, strlen($value));
                
                if ( $i < $numItems) {
                    socket_write($this->getSocket(), $return, strlen($return) );                
                }
                $i++;
            }

            socket_write($this->getSocket(), $endBlock, strlen($endBlock) );
      #      socket_write($this->getSocket(), $return, strlen($return) );

    }

    public function run()
    {
        $this->write( $this->getData() );
        while( $out = socket_read($this->getSocket(), 2048 ) ) {
            return trim($out);
        }
    }


    /**
     * Gets the value of socket.
     *
     * @return mixed
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Sets the value of socket.
     *
     * @param mixed $socket the socket
     *
     * @return self
     */
    private function _setSocket()
    {
        if ( $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)  ) {
            $result = socket_connect($this->socket, $this->getAddress(), $this->getPort() );
        }

        return $this;
    }

    /**
     * Gets the value of data.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets the value of data.
     *
     * @param mixed $data the data
     *
     * @return self
     */
    private function _setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets the value of port.
     *
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Sets the value of port.
     *
     * @param mixed $port the port
     *
     * @return self
     */
    private function _setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Gets the value of address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the value of address.
     *
     * @param mixed $address the address
     *
     * @return self
     */
    private function _setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}