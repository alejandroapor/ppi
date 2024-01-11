PGDMP         2                 |         	   pasantias    14.5    14.5 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    53462 	   pasantias    DATABASE     e   CREATE DATABASE pasantias WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE pasantias;
                postgres    false            �            1259    53521    cargoPersona    TABLE     ~   CREATE TABLE public."cargoPersona" (
    idpersona integer NOT NULL,
    idcargo integer NOT NULL,
    id integer NOT NULL
);
 "   DROP TABLE public."cargoPersona";
       public         heap    postgres    false            �            1259    53601    cargoPersona_id_seq    SEQUENCE     �   CREATE SEQUENCE public."cargoPersona_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public."cargoPersona_id_seq";
       public          postgres    false    215            �           0    0    cargoPersona_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public."cargoPersona_id_seq" OWNED BY public."cargoPersona".id;
          public          postgres    false    226            �            1259    53483    cargos    TABLE     ^   CREATE TABLE public.cargos (
    cargo character varying NOT NULL,
    id integer NOT NULL
);
    DROP TABLE public.cargos;
       public         heap    postgres    false            �            1259    53512    cargos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cargos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.cargos_id_seq;
       public          postgres    false    213            �           0    0    cargos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.cargos_id_seq OWNED BY public.cargos.id;
          public          postgres    false    214            �            1259    53609    detallepedido    TABLE     ]  CREATE TABLE public.detallepedido (
    id integer NOT NULL,
    fecha date,
    obcontratacion character varying(500),
    requerimiento character varying(400),
    numeropartida character varying(100),
    necesidad character varying(200),
    tipoproducto character varying(100),
    tipocompra character varying(100),
    idproyecto integer,
    unidadreq integer,
    areareq character varying(100),
    adminoc integer,
    idresponsable integer,
    funnointer integer,
    areafin integer,
    responcompra integer,
    idusuario integer,
    idcertificado integer NOT NULL,
    idmemo integer
);
 !   DROP TABLE public.detallepedido;
       public         heap    postgres    false            �            1259    53765 
   expediente    TABLE     �  CREATE TABLE public.expediente (
    id integer NOT NULL,
    expediente character varying(10),
    idesrevisado integer,
    idexsupervisado integer,
    certificacion character varying(10),
    observacion character varying(10),
    idcertrespon integer,
    constcatal character varying(10),
    idsupervisado integer,
    idrevisado integer,
    constanbodeg character varying(10),
    idrevisa integer,
    idsupervisa integer
);
    DROP TABLE public.expediente;
       public         heap    postgres    false            �            1259    53764    expediente_id_seq    SEQUENCE     �   CREATE SEQUENCE public.expediente_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.expediente_id_seq;
       public          postgres    false    242            �           0    0    expediente_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.expediente_id_seq OWNED BY public.expediente.id;
          public          postgres    false    241            �            1259    53747 
   memorandos    TABLE     r   CREATE TABLE public.memorandos (
    id integer NOT NULL,
    idtipomemo integer,
    codigo character varying
);
    DROP TABLE public.memorandos;
       public         heap    postgres    false            �            1259    53738    tipomemo    TABLE     �   CREATE TABLE public.tipomemo (
    id integer NOT NULL,
    tipo character varying(100),
    abreviatura character varying(100),
    anio character varying(12)
);
    DROP TABLE public.tipomemo;
       public         heap    postgres    false            �            1259    53737    memorandos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.memorandos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.memorandos_id_seq;
       public          postgres    false    238            �           0    0    memorandos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.memorandos_id_seq OWNED BY public.tipomemo.id;
          public          postgres    false    237            �            1259    53746    memorandos_id_seq1    SEQUENCE     �   CREATE SEQUENCE public.memorandos_id_seq1
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.memorandos_id_seq1;
       public          postgres    false    240            �           0    0    memorandos_id_seq1    SEQUENCE OWNED BY     H   ALTER SEQUENCE public.memorandos_id_seq1 OWNED BY public.memorandos.id;
          public          postgres    false    239            �            1259    53716    orden    TABLE     �   CREATE TABLE public.orden (
    id integer NOT NULL,
    fecha date,
    idproveedor integer,
    idproforma integer,
    idusuario integer
);
    DROP TABLE public.orden;
       public         heap    postgres    false            �            1259    53715    orden_id_seq    SEQUENCE     �   CREATE SEQUENCE public.orden_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.orden_id_seq;
       public          postgres    false    236            �           0    0    orden_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.orden_id_seq OWNED BY public.orden.id;
          public          postgres    false    235            �            1259    53668    pedido    TABLE     w   CREATE TABLE public.pedido (
    id integer NOT NULL,
    idcpc integer,
    cantidad integer,
    idpedido integer
);
    DROP TABLE public.pedido;
       public         heap    postgres    false            �            1259    53667    pedido_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.pedido_id_seq;
       public          postgres    false    230            �           0    0    pedido_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pedido_id_seq OWNED BY public.pedido.id;
          public          postgres    false    229            �            1259    53471    personal    TABLE     �   CREATE TABLE public.personal (
    id integer NOT NULL,
    nombre character varying(100),
    apellido character varying(100),
    cedula character varying(10),
    idusario integer
);
    DROP TABLE public.personal;
       public         heap    postgres    false            �            1259    53470    personal_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.personal_id_seq;
       public          postgres    false    212            �           0    0    personal_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.personal_id_seq OWNED BY public.personal.id;
          public          postgres    false    211            �            1259    53567    producProve    TABLE     {   CREATE TABLE public."producProve" (
    id integer NOT NULL,
    nombre character varying,
    unidad character varying
);
 !   DROP TABLE public."producProve";
       public         heap    postgres    false            �            1259    53566    producProve_id_seq    SEQUENCE     �   CREATE SEQUENCE public."producProve_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public."producProve_id_seq";
       public          postgres    false    223            �           0    0    producProve_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public."producProve_id_seq" OWNED BY public."producProve".id;
          public          postgres    false    222            �            1259    53548    productobodega    TABLE     n   CREATE TABLE public.productobodega (
    id integer NOT NULL,
    cantidad integer,
    idproducto integer
);
 "   DROP TABLE public.productobodega;
       public         heap    postgres    false            �            1259    53547    productobodega_id_seq    SEQUENCE     �   CREATE SEQUENCE public.productobodega_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.productobodega_id_seq;
       public          postgres    false    219            �           0    0    productobodega_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.productobodega_id_seq OWNED BY public.productobodega.id;
          public          postgres    false    218            �            1259    53539    productocpc    TABLE     y   CREATE TABLE public.productocpc (
    id integer NOT NULL,
    codigo character varying,
    nombre character varying
);
    DROP TABLE public.productocpc;
       public         heap    postgres    false            �            1259    53538    productocpc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.productocpc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.productocpc_id_seq;
       public          postgres    false    217            �           0    0    productocpc_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.productocpc_id_seq OWNED BY public.productocpc.id;
          public          postgres    false    216            �            1259    53576    productosProveedor    TABLE     �   CREATE TABLE public."productosProveedor" (
    id integer NOT NULL,
    idproducto integer,
    idproveedor integer,
    precio double precision
);
 (   DROP TABLE public."productosProveedor";
       public         heap    postgres    false            �            1259    53575    productosProveedor_id_seq    SEQUENCE     �   CREATE SEQUENCE public."productosProveedor_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public."productosProveedor_id_seq";
       public          postgres    false    225            �           0    0    productosProveedor_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public."productosProveedor_id_seq" OWNED BY public."productosProveedor".id;
          public          postgres    false    224            �            1259    53692    proforma    TABLE     �   CREATE TABLE public.proforma (
    id integer NOT NULL,
    numero character varying,
    idproveedor integer,
    idpedido integer,
    idproductoprovee integer,
    valortotal double precision
);
    DROP TABLE public.proforma;
       public         heap    postgres    false            �            1259    53608    proformaProveedor_id_seq    SEQUENCE     �   CREATE SEQUENCE public."proformaProveedor_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public."proformaProveedor_id_seq";
       public          postgres    false    228            �           0    0    proformaProveedor_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public."proformaProveedor_id_seq" OWNED BY public.detallepedido.id;
          public          postgres    false    227            �            1259    53691    proforma_id_seq    SEQUENCE     �   CREATE SEQUENCE public.proforma_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.proforma_id_seq;
       public          postgres    false    234            �           0    0    proforma_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.proforma_id_seq OWNED BY public.proforma.id;
          public          postgres    false    233            �            1259    53560 	   proveedor    TABLE     �   CREATE TABLE public.proveedor (
    id integer NOT NULL,
    nombre character varying(100),
    apellido character varying(100),
    cedula character varying(10),
    correo character varying(100),
    direccion character varying(100)
);
    DROP TABLE public.proveedor;
       public         heap    postgres    false            �            1259    53559    proveedor_id_seq    SEQUENCE     �   CREATE SEQUENCE public.proveedor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.proveedor_id_seq;
       public          postgres    false    221            �           0    0    proveedor_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.proveedor_id_seq OWNED BY public.proveedor.id;
          public          postgres    false    220            �            1259    53685 	   proyectos    TABLE     �   CREATE TABLE public.proyectos (
    id integer NOT NULL,
    proyecto character varying(100),
    codigo character varying(100)
);
    DROP TABLE public.proyectos;
       public         heap    postgres    false            �            1259    53684    proyectos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.proyectos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.proyectos_id_seq;
       public          postgres    false    232            �           0    0    proyectos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.proyectos_id_seq OWNED BY public.proyectos.id;
          public          postgres    false    231            �            1259    53464    usuarios    TABLE     �   CREATE TABLE public.usuarios (
    id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    contra character varying(10) NOT NULL,
    rol character varying(50)
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �            1259    53463    usuarios_id_seq    SEQUENCE     �   CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.usuarios_id_seq;
       public          postgres    false    210            �           0    0    usuarios_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;
          public          postgres    false    209            �           2604    53602    cargoPersona id    DEFAULT     v   ALTER TABLE ONLY public."cargoPersona" ALTER COLUMN id SET DEFAULT nextval('public."cargoPersona_id_seq"'::regclass);
 @   ALTER TABLE public."cargoPersona" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    215            �           2604    53513 	   cargos id    DEFAULT     f   ALTER TABLE ONLY public.cargos ALTER COLUMN id SET DEFAULT nextval('public.cargos_id_seq'::regclass);
 8   ALTER TABLE public.cargos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213            �           2604    53612    detallepedido id    DEFAULT     z   ALTER TABLE ONLY public.detallepedido ALTER COLUMN id SET DEFAULT nextval('public."proformaProveedor_id_seq"'::regclass);
 ?   ALTER TABLE public.detallepedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    228    228            �           2604    53768    expediente id    DEFAULT     n   ALTER TABLE ONLY public.expediente ALTER COLUMN id SET DEFAULT nextval('public.expediente_id_seq'::regclass);
 <   ALTER TABLE public.expediente ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    241    242            �           2604    53750    memorandos id    DEFAULT     o   ALTER TABLE ONLY public.memorandos ALTER COLUMN id SET DEFAULT nextval('public.memorandos_id_seq1'::regclass);
 <   ALTER TABLE public.memorandos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    240    240            �           2604    53719    orden id    DEFAULT     d   ALTER TABLE ONLY public.orden ALTER COLUMN id SET DEFAULT nextval('public.orden_id_seq'::regclass);
 7   ALTER TABLE public.orden ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    235    236            �           2604    53671 	   pedido id    DEFAULT     f   ALTER TABLE ONLY public.pedido ALTER COLUMN id SET DEFAULT nextval('public.pedido_id_seq'::regclass);
 8   ALTER TABLE public.pedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    229    230            �           2604    53474    personal id    DEFAULT     j   ALTER TABLE ONLY public.personal ALTER COLUMN id SET DEFAULT nextval('public.personal_id_seq'::regclass);
 :   ALTER TABLE public.personal ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    211    212            �           2604    53570    producProve id    DEFAULT     t   ALTER TABLE ONLY public."producProve" ALTER COLUMN id SET DEFAULT nextval('public."producProve_id_seq"'::regclass);
 ?   ALTER TABLE public."producProve" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            �           2604    53551    productobodega id    DEFAULT     v   ALTER TABLE ONLY public.productobodega ALTER COLUMN id SET DEFAULT nextval('public.productobodega_id_seq'::regclass);
 @   ALTER TABLE public.productobodega ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    219    219            �           2604    53542    productocpc id    DEFAULT     p   ALTER TABLE ONLY public.productocpc ALTER COLUMN id SET DEFAULT nextval('public.productocpc_id_seq'::regclass);
 =   ALTER TABLE public.productocpc ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            �           2604    53579    productosProveedor id    DEFAULT     �   ALTER TABLE ONLY public."productosProveedor" ALTER COLUMN id SET DEFAULT nextval('public."productosProveedor_id_seq"'::regclass);
 F   ALTER TABLE public."productosProveedor" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    53695    proforma id    DEFAULT     j   ALTER TABLE ONLY public.proforma ALTER COLUMN id SET DEFAULT nextval('public.proforma_id_seq'::regclass);
 :   ALTER TABLE public.proforma ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    233    234            �           2604    53563    proveedor id    DEFAULT     l   ALTER TABLE ONLY public.proveedor ALTER COLUMN id SET DEFAULT nextval('public.proveedor_id_seq'::regclass);
 ;   ALTER TABLE public.proveedor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    53688    proyectos id    DEFAULT     l   ALTER TABLE ONLY public.proyectos ALTER COLUMN id SET DEFAULT nextval('public.proyectos_id_seq'::regclass);
 ;   ALTER TABLE public.proyectos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    231    232            �           2604    53741    tipomemo id    DEFAULT     l   ALTER TABLE ONLY public.tipomemo ALTER COLUMN id SET DEFAULT nextval('public.memorandos_id_seq'::regclass);
 :   ALTER TABLE public.tipomemo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    238    238            �           2604    53467    usuarios id    DEFAULT     j   ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);
 :   ALTER TABLE public.usuarios ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            �          0    53521    cargoPersona 
   TABLE DATA           @   COPY public."cargoPersona" (idpersona, idcargo, id) FROM stdin;
    public          postgres    false    215   �       �          0    53483    cargos 
   TABLE DATA           +   COPY public.cargos (cargo, id) FROM stdin;
    public          postgres    false    213   �       �          0    53609    detallepedido 
   TABLE DATA             COPY public.detallepedido (id, fecha, obcontratacion, requerimiento, numeropartida, necesidad, tipoproducto, tipocompra, idproyecto, unidadreq, areareq, adminoc, idresponsable, funnointer, areafin, responcompra, idusuario, idcertificado, idmemo) FROM stdin;
    public          postgres    false    228   -�       �          0    53765 
   expediente 
   TABLE DATA           �   COPY public.expediente (id, expediente, idesrevisado, idexsupervisado, certificacion, observacion, idcertrespon, constcatal, idsupervisado, idrevisado, constanbodeg, idrevisa, idsupervisa) FROM stdin;
    public          postgres    false    242   J�       �          0    53747 
   memorandos 
   TABLE DATA           <   COPY public.memorandos (id, idtipomemo, codigo) FROM stdin;
    public          postgres    false    240   g�       �          0    53716    orden 
   TABLE DATA           N   COPY public.orden (id, fecha, idproveedor, idproforma, idusuario) FROM stdin;
    public          postgres    false    236   ��       �          0    53668    pedido 
   TABLE DATA           ?   COPY public.pedido (id, idcpc, cantidad, idpedido) FROM stdin;
    public          postgres    false    230   ��       �          0    53471    personal 
   TABLE DATA           J   COPY public.personal (id, nombre, apellido, cedula, idusario) FROM stdin;
    public          postgres    false    212   ��       �          0    53567    producProve 
   TABLE DATA           ;   COPY public."producProve" (id, nombre, unidad) FROM stdin;
    public          postgres    false    223   ۷       �          0    53548    productobodega 
   TABLE DATA           B   COPY public.productobodega (id, cantidad, idproducto) FROM stdin;
    public          postgres    false    219   ��       �          0    53539    productocpc 
   TABLE DATA           9   COPY public.productocpc (id, codigo, nombre) FROM stdin;
    public          postgres    false    217   �       �          0    53576    productosProveedor 
   TABLE DATA           S   COPY public."productosProveedor" (id, idproducto, idproveedor, precio) FROM stdin;
    public          postgres    false    225   2�       �          0    53692    proforma 
   TABLE DATA           c   COPY public.proforma (id, numero, idproveedor, idpedido, idproductoprovee, valortotal) FROM stdin;
    public          postgres    false    234   O�       �          0    53560 	   proveedor 
   TABLE DATA           T   COPY public.proveedor (id, nombre, apellido, cedula, correo, direccion) FROM stdin;
    public          postgres    false    221   l�       �          0    53685 	   proyectos 
   TABLE DATA           9   COPY public.proyectos (id, proyecto, codigo) FROM stdin;
    public          postgres    false    232   ��       �          0    53738    tipomemo 
   TABLE DATA           ?   COPY public.tipomemo (id, tipo, abreviatura, anio) FROM stdin;
    public          postgres    false    238   ��       �          0    53464    usuarios 
   TABLE DATA           ;   COPY public.usuarios (id, nombre, contra, rol) FROM stdin;
    public          postgres    false    210   ø       �           0    0    cargoPersona_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public."cargoPersona_id_seq"', 1, false);
          public          postgres    false    226            �           0    0    cargos_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.cargos_id_seq', 1, false);
          public          postgres    false    214            �           0    0    expediente_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.expediente_id_seq', 1, false);
          public          postgres    false    241            �           0    0    memorandos_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.memorandos_id_seq', 1, false);
          public          postgres    false    237            �           0    0    memorandos_id_seq1    SEQUENCE SET     A   SELECT pg_catalog.setval('public.memorandos_id_seq1', 1, false);
          public          postgres    false    239            �           0    0    orden_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.orden_id_seq', 1, false);
          public          postgres    false    235            �           0    0    pedido_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pedido_id_seq', 1, false);
          public          postgres    false    229            �           0    0    personal_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.personal_id_seq', 1, false);
          public          postgres    false    211            �           0    0    producProve_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public."producProve_id_seq"', 1, false);
          public          postgres    false    222            �           0    0    productobodega_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.productobodega_id_seq', 1, false);
          public          postgres    false    218            �           0    0    productocpc_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.productocpc_id_seq', 1, false);
          public          postgres    false    216            �           0    0    productosProveedor_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public."productosProveedor_id_seq"', 1, false);
          public          postgres    false    224            �           0    0    proformaProveedor_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public."proformaProveedor_id_seq"', 1, false);
          public          postgres    false    227            �           0    0    proforma_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.proforma_id_seq', 1, false);
          public          postgres    false    233            �           0    0    proveedor_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.proveedor_id_seq', 1, false);
          public          postgres    false    220            �           0    0    proyectos_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.proyectos_id_seq', 1, false);
          public          postgres    false    231            �           0    0    usuarios_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.usuarios_id_seq', 1, true);
          public          postgres    false    209            �           2606    53607    cargoPersona cargoPersona_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public."cargoPersona"
    ADD CONSTRAINT "cargoPersona_pkey" PRIMARY KEY (id);
 L   ALTER TABLE ONLY public."cargoPersona" DROP CONSTRAINT "cargoPersona_pkey";
       public            postgres    false    215            �           2606    53520    cargos cargos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.cargos
    ADD CONSTRAINT cargos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.cargos DROP CONSTRAINT cargos_pkey;
       public            postgres    false    213            �           2606    53666     detallepedido detallepedido_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT detallepedido_pkey PRIMARY KEY (id) INCLUDE (id);
 J   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT detallepedido_pkey;
       public            postgres    false    228            �           2606    53770    expediente expediente_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_pkey;
       public            postgres    false    242            �           2606    53745    tipomemo memorandos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.tipomemo
    ADD CONSTRAINT memorandos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.tipomemo DROP CONSTRAINT memorandos_pkey;
       public            postgres    false    238            �           2606    53754    memorandos memorandos_pkey1 
   CONSTRAINT     Y   ALTER TABLE ONLY public.memorandos
    ADD CONSTRAINT memorandos_pkey1 PRIMARY KEY (id);
 E   ALTER TABLE ONLY public.memorandos DROP CONSTRAINT memorandos_pkey1;
       public            postgres    false    240            �           2606    53721    orden orden_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.orden
    ADD CONSTRAINT orden_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.orden DROP CONSTRAINT orden_pkey;
       public            postgres    false    236            �           2606    53673    pedido pedido_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_pkey;
       public            postgres    false    230            �           2606    53476    personal personal_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (id) INCLUDE (id);
 @   ALTER TABLE ONLY public.personal DROP CONSTRAINT personal_pkey;
       public            postgres    false    212            �           2606    53574    producProve producProve_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public."producProve"
    ADD CONSTRAINT "producProve_pkey" PRIMARY KEY (id);
 J   ALTER TABLE ONLY public."producProve" DROP CONSTRAINT "producProve_pkey";
       public            postgres    false    223            �           2606    53553 "   productobodega productobodega_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.productobodega
    ADD CONSTRAINT productobodega_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.productobodega DROP CONSTRAINT productobodega_pkey;
       public            postgres    false    219            �           2606    53546    productocpc productocpc_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.productocpc
    ADD CONSTRAINT productocpc_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.productocpc DROP CONSTRAINT productocpc_pkey;
       public            postgres    false    217            �           2606    53581 *   productosProveedor productosProveedor_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public."productosProveedor"
    ADD CONSTRAINT "productosProveedor_pkey" PRIMARY KEY (id);
 X   ALTER TABLE ONLY public."productosProveedor" DROP CONSTRAINT "productosProveedor_pkey";
       public            postgres    false    225            �           2606    53699    proforma proforma_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.proforma
    ADD CONSTRAINT proforma_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.proforma DROP CONSTRAINT proforma_pkey;
       public            postgres    false    234            �           2606    53565    proveedor proveedor_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.proveedor DROP CONSTRAINT proveedor_pkey;
       public            postgres    false    221            �           2606    53690    proyectos proyectos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.proyectos
    ADD CONSTRAINT proyectos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.proyectos DROP CONSTRAINT proyectos_pkey;
       public            postgres    false    232            �           2606    53469    usuarios usuarios_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    210            �           2606    53533 &   cargoPersona cargoPersona_idcargo_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public."cargoPersona"
    ADD CONSTRAINT "cargoPersona_idcargo_fkey" FOREIGN KEY (idcargo) REFERENCES public.cargos(id);
 T   ALTER TABLE ONLY public."cargoPersona" DROP CONSTRAINT "cargoPersona_idcargo_fkey";
       public          postgres    false    215    213    3266            �           2606    53528 (   cargoPersona cargoPersona_idpersona_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public."cargoPersona"
    ADD CONSTRAINT "cargoPersona_idpersona_fkey" FOREIGN KEY (idpersona) REFERENCES public.personal(id);
 V   ALTER TABLE ONLY public."cargoPersona" DROP CONSTRAINT "cargoPersona_idpersona_fkey";
       public          postgres    false    212    3264    215            �           2606    53776 '   expediente expediente_idcertrespon_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idcertrespon_fkey FOREIGN KEY (idcertrespon) REFERENCES public."cargoPersona"(id);
 Q   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idcertrespon_fkey;
       public          postgres    false    242    215    3268            �           2606    53771 '   expediente expediente_idesrevisado_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idesrevisado_fkey FOREIGN KEY (idesrevisado) REFERENCES public."cargoPersona"(id);
 Q   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idesrevisado_fkey;
       public          postgres    false    242    3268    215            �           2606    53796 *   expediente expediente_idexsupervisado_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idexsupervisado_fkey FOREIGN KEY (idexsupervisado) REFERENCES public."cargoPersona"(id);
 T   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idexsupervisado_fkey;
       public          postgres    false    3268    215    242            �           2606    53801 #   expediente expediente_idrevisa_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idrevisa_fkey FOREIGN KEY (idrevisa) REFERENCES public."cargoPersona"(id);
 M   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idrevisa_fkey;
       public          postgres    false    3268    242    215            �           2606    53786 %   expediente expediente_idrevisado_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idrevisado_fkey FOREIGN KEY (idrevisado) REFERENCES public."cargoPersona"(id);
 O   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idrevisado_fkey;
       public          postgres    false    215    3268    242            �           2606    53791 &   expediente expediente_idsupervisa_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idsupervisa_fkey FOREIGN KEY (idsupervisa) REFERENCES public."cargoPersona"(id);
 P   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idsupervisa_fkey;
       public          postgres    false    3268    215    242            �           2606    53781 (   expediente expediente_idsupervisado_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.expediente
    ADD CONSTRAINT expediente_idsupervisado_fkey FOREIGN KEY (idsupervisado) REFERENCES public."cargoPersona"(id);
 R   ALTER TABLE ONLY public.expediente DROP CONSTRAINT expediente_idsupervisado_fkey;
       public          postgres    false    3268    215    242            �           2606    53617    detallepedido idadminoc    FK CONSTRAINT        ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT idadminoc FOREIGN KEY (adminoc) REFERENCES public."cargoPersona"(id);
 A   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT idadminoc;
       public          postgres    false    215    228    3268            �           2606    53622    detallepedido idresponsable    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT idresponsable FOREIGN KEY (idresponsable) REFERENCES public."cargoPersona"(id);
 E   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT idresponsable;
       public          postgres    false    215    228    3268            �           2606    53755 %   memorandos memorandos_idtipomemo_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.memorandos
    ADD CONSTRAINT memorandos_idtipomemo_fkey FOREIGN KEY (idtipomemo) REFERENCES public.tipomemo(id);
 O   ALTER TABLE ONLY public.memorandos DROP CONSTRAINT memorandos_idtipomemo_fkey;
       public          postgres    false    238    240    3290            �           2606    53727    orden orden_idproforma_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.orden
    ADD CONSTRAINT orden_idproforma_fkey FOREIGN KEY (idproforma) REFERENCES public.proforma(id);
 E   ALTER TABLE ONLY public.orden DROP CONSTRAINT orden_idproforma_fkey;
       public          postgres    false    3286    236    234            �           2606    53722    orden orden_idproveedor_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.orden
    ADD CONSTRAINT orden_idproveedor_fkey FOREIGN KEY (idproveedor) REFERENCES public.proveedor(id);
 F   ALTER TABLE ONLY public.orden DROP CONSTRAINT orden_idproveedor_fkey;
       public          postgres    false    221    3274    236            �           2606    53732    orden orden_idusuario_fkey    FK CONSTRAINT     ~   ALTER TABLE ONLY public.orden
    ADD CONSTRAINT orden_idusuario_fkey FOREIGN KEY (idusuario) REFERENCES public.usuarios(id);
 D   ALTER TABLE ONLY public.orden DROP CONSTRAINT orden_idusuario_fkey;
       public          postgres    false    210    3262    236            �           2606    53674    pedido pedido_idcpc_fkey    FK CONSTRAINT     {   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_idcpc_fkey FOREIGN KEY (idcpc) REFERENCES public.productocpc(id);
 B   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_idcpc_fkey;
       public          postgres    false    217    230    3270            �           2606    53679    pedido pedido_idpedido_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_idpedido_fkey FOREIGN KEY (idpedido) REFERENCES public.detallepedido(id);
 E   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_idpedido_fkey;
       public          postgres    false    228    3280    230            �           2606    53477    personal personal_idusario_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_idusario_fkey FOREIGN KEY (idusario) REFERENCES public.usuarios(id);
 I   ALTER TABLE ONLY public.personal DROP CONSTRAINT personal_idusario_fkey;
       public          postgres    false    212    210    3262            �           2606    53554 -   productobodega productobodega_idproducto_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.productobodega
    ADD CONSTRAINT productobodega_idproducto_fkey FOREIGN KEY (idproducto) REFERENCES public.productocpc(id);
 W   ALTER TABLE ONLY public.productobodega DROP CONSTRAINT productobodega_idproducto_fkey;
       public          postgres    false    3270    219    217            �           2606    53582 5   productosProveedor productosProveedor_idproducto_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public."productosProveedor"
    ADD CONSTRAINT "productosProveedor_idproducto_fkey" FOREIGN KEY (idproducto) REFERENCES public."producProve"(id);
 c   ALTER TABLE ONLY public."productosProveedor" DROP CONSTRAINT "productosProveedor_idproducto_fkey";
       public          postgres    false    223    3276    225            �           2606    53587 6   productosProveedor productosProveedor_idproveedor_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public."productosProveedor"
    ADD CONSTRAINT "productosProveedor_idproveedor_fkey" FOREIGN KEY (idproveedor) REFERENCES public.proveedor(id);
 d   ALTER TABLE ONLY public."productosProveedor" DROP CONSTRAINT "productosProveedor_idproveedor_fkey";
       public          postgres    false    225    3274    221            �           2606    53632 ,   detallepedido proformaProveedor_areafin_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT "proformaProveedor_areafin_fkey" FOREIGN KEY (areafin) REFERENCES public."cargoPersona"(id);
 X   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT "proformaProveedor_areafin_fkey";
       public          postgres    false    215    3268    228            �           2606    53627 /   detallepedido proformaProveedor_funnointer_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT "proformaProveedor_funnointer_fkey" FOREIGN KEY (funnointer) REFERENCES public."cargoPersona"(id);
 [   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT "proformaProveedor_funnointer_fkey";
       public          postgres    false    228    3268    215            �           2606    53642 .   detallepedido proformaProveedor_idusuario_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT "proformaProveedor_idusuario_fkey" FOREIGN KEY (idusuario) REFERENCES public.usuarios(id);
 Z   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT "proformaProveedor_idusuario_fkey";
       public          postgres    false    228    3262    210            �           2606    53637 1   detallepedido proformaProveedor_responcompra_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT "proformaProveedor_responcompra_fkey" FOREIGN KEY (responcompra) REFERENCES public."cargoPersona"(id);
 ]   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT "proformaProveedor_responcompra_fkey";
       public          postgres    false    215    3268    228            �           2606    53647 .   detallepedido proformaProveedor_unidadreq_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.detallepedido
    ADD CONSTRAINT "proformaProveedor_unidadreq_fkey" FOREIGN KEY (unidadreq) REFERENCES public."cargoPersona"(id);
 Z   ALTER TABLE ONLY public.detallepedido DROP CONSTRAINT "proformaProveedor_unidadreq_fkey";
       public          postgres    false    3268    215    228            �           2606    53705    proforma proforma_idpedido_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.proforma
    ADD CONSTRAINT proforma_idpedido_fkey FOREIGN KEY (idpedido) REFERENCES public.pedido(id);
 I   ALTER TABLE ONLY public.proforma DROP CONSTRAINT proforma_idpedido_fkey;
       public          postgres    false    234    3282    230            �           2606    53710 '   proforma proforma_idproductoprovee_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.proforma
    ADD CONSTRAINT proforma_idproductoprovee_fkey FOREIGN KEY (idproductoprovee) REFERENCES public."productosProveedor"(id);
 Q   ALTER TABLE ONLY public.proforma DROP CONSTRAINT proforma_idproductoprovee_fkey;
       public          postgres    false    3278    234    225            �           2606    53700 "   proforma proforma_idproveedor_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.proforma
    ADD CONSTRAINT proforma_idproveedor_fkey FOREIGN KEY (idproveedor) REFERENCES public.proveedor(id);
 L   ALTER TABLE ONLY public.proforma DROP CONSTRAINT proforma_idproveedor_fkey;
       public          postgres    false    234    221    3274            �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x�3�LL���C&3�K�S�b���� �
�     