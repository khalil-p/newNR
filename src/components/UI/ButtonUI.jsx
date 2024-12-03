/* eslint-disable react/button-has-type */

const ButtonUI = ({
    text,
    buttonType = 'primary',
    icon,
    isLoading,
    type = 'button',
    ...rest
  }) => {
    if (buttonType === 'secondary') {
      return (
        <button
          {...rest}
          type={type}
          disabled={isLoading || rest.disabled}
          className={`h-10 flex items-center text-body justify-center gap-1 text-sm font-semibold 
          border border-lightGray cursor-pointer  ${rest.className} rounded-lg bg-white outline-gray 
           transition-all disabled:brightness-90  disabled:cursor-not-allowed disabled:ring-0
           hover:brightness-90 active:ring-1 active:ring-extraLightGray/50 `}
        >
          {isLoading ? (
            <>...</>
          ) : (
            <>
              {text ? <>{text}</> : <></>}
              {icon ? <span>{icon}</span> : <></>}
            </>
          )}
        </button>
      );
    }
  
    if (buttonType === 'primary') {
      return (
        <button
          {...rest}
          type={type}
          disabled={isLoading || rest.disabled}
          className={`min-h-10 ${rest.className} rounded-lg flex items-center justify-center gap-1 text-sm 
            font-medium  text-white bg-primary hover:brightness-90 transition-all
             active:ring-1 active:ring-extraLightGray cursor-pointer outline-extraLightGray
            disabled:brightness-90 disabled:cursor-not-allowed disabled:ring-0`}
        >
          {isLoading ? (
            <>...</>
          ) : (
            <>
              {text ? <>{text}</> : <></>}
              {icon ? <span>{icon}</span> : <></>}
            </>
          )}
        </button>
      );
    }
  
    return (
      <button
        {...rest}
        type={type}
        disabled={isLoading || rest.disabled}
        className={`text-sm text-body font-medium  flex items-center justify-center  gap-1  
             focus:outline-1 focus:outline-extraLightGray cursor-pointer ${rest.className}
            active:brightness-90 transition-all disabled:opacity-60 disabled:cursor-not-allowed outline-gray`}
      >
        {isLoading ? (
          <>...</>
        ) : (
          <>
            {text ? <>{text}</> : <></>}
            {icon ? <span>{icon}</span> : <></>}
          </>
        )}
      </button>
    );
  };
  
  export default ButtonUI;
  